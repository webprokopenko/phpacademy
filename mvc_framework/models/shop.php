<?php

class Shop extends Model{

    public static function getProductsList(){
        $sql = "select * from products where 1";
        return App::$db->query($sql);
    }

    public static function getProductsListByIds(array $ids){
        if(!$ids){
            return null;
        }
        $sql = "select * from products where id in (".implode(',', $ids).")";
        return App::$db->query($sql);
    }

    /*
     *
     *  select a.*, c.*, av.* from attr_groups a
        join attributes_attr_groups b on b.attr_group_id = a.id
        join attributes c on c.id = b.attribute_id
        join attr_values av on c.id = av.attribute_id
        where a.id = 1
     *
     */
    public static function getAttributesByGroupID($group_id = 1){
        $group_id = (int)$group_id;

        return App::$db->query("
            select c.title as attr_title, av.id as attr_val_id, av.value from attr_groups a
            join attributes_attr_groups b on b.attr_group_id = a.id
            join attributes c on c.id = b.attribute_id
            join attr_values av on c.id = av.attribute_id
            where a.id = {$group_id}");
    }

    public static function filter(array $groupped_selected_attrs = array()){
        if(empty($groupped_selected_attrs)){
            return null;
        }
        /*
         *
         * Array
(
    [Тип товара] => Array
        (
            [1] => САНДАЛИИ
            [2] => ВЬЕТНАМКИ
        )

    [Цвет] => Array
        (
            [4] => Красный
        )

    [Размер] => Array
        (
            [7] => 39
        )

)
         */
        $in_statement_for_selects = array();
        foreach($groupped_selected_attrs as $group_key => $group){
            $data_for_select = array();
            foreach($group as $attr_id => $attr_value){
                $data_for_select[] = $attr_id;
            }
            $in_statement = implode(',', $data_for_select);
            // Если есть хоть один атрибут
            if($in_statement){
                $in_statement_for_selects[] = $in_statement;
            }


        }
        $i = 0;

        /**
         * Формируем большой запрос по частям, вот пример:
         * select tbl_1.product_id from
        (select product_id from products_attr_values where attr_value_id in (1,2)) tbl_1
        join (select product_id from products_attr_values where attr_value_id in (4)) tbl_2 on tbl_1.product_id = tbl_2.product_id
        where 1 AND tbl_1.product_id is not null AND tbl_2.product_id is not null
         */

        $result_sql = "select tbl_1.product_id from ";

        // Инициализируем условие
        $where = "where 1";

        if($in_statement_for_selects){
            foreach($in_statement_for_selects as $in){
                $i++;
                $sql = '';

                if($i > 1){
                    $sql .= " join ";
                }

                $sql .= "(select product_id from products_attr_values where attr_value_id in ({$in})) tbl_{$i}";

                if($i > 1){
                    $sql .= " on tbl_1.product_id = tbl_{$i}.product_id";
                }

                $where .= " AND tbl_{$i}.product_id is not null";

                $result_sql .= $sql.PHP_EOL;
            }
        } else {
            $result_sql = "select id as product_id from products";
        }


        $result_sql .= PHP_EOL.$where;

        $items = App::$db->query($result_sql);
        $product_ids = array();
        if($items){
            foreach($items as $row){
                $product_ids[] = $row['product_id'];
            }
        }

        return $product_ids;
    }


}