<?php

class ProductsController extends Controller{

    public function __construct($data = array())
    {
        parent::__construct($data);
    }

    public function index(){

        // Все атрибуты группы Обувь (№1)
        $attrs = Shop::getAttributesByGroupID(1);

        // Только номера выбранных значений атрибутов
        $this->data['selected_filters'] = (isset($_REQUEST['filter']) && is_array($_REQUEST['filter'])) ? $_REQUEST['filter'] : null;



        // Сделаем вложенный массив
        // атрибут => значения
        if (!empty($attrs)){
            foreach($attrs as $row){
                $attr_result[$row['attr_title']][$row['attr_val_id']] = $row['value'];
            }
        }

        // Оставляем в массиве только выбранные атрибуты
        $selected_attrs_array = $attr_result;
        foreach($selected_attrs_array as $group_key => $attr_group){
            foreach($attr_group as $key => $value){
                // Если атрибут не выбран, то удаляем его
                if(!in_array($key, $this->data['selected_filters'])){
                   unset($selected_attrs_array[$group_key][$key]);
                }
            }
        }



        // Получаем номера товаров согласно фильтра
        $filtered_product_ids = Shop::filter($selected_attrs_array);



        // Все товары согласно фильтра
        $this->data['products'] = Shop::getProductsListByIds($filtered_product_ids);



        $this->data['attr_result'] = $attr_result;

    }

}