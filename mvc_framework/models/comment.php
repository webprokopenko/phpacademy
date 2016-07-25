<?php

class Comment extends Model {

    public function save($data, $id = null){
        if ( !isset($data['name']) || !isset($data['email']) || !isset($data['message']) ){
            return false;
        }

        $id = (int)$id;
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $message = $this->db->escape($data['message']);

        if ( !$id ){ // Add new record
            $sql = "
                insert into messages
                   set name = '{$name}',
                       email = '{$email}',
                       message = '{$message}'
            ";
        } else { // Update existing record
            $sql = "
                update messages
                   set name = '{$name}',
                       email = '{$email}',
                       message = '{$message}'
                   where id = {$id}
            ";
        }

        return $this->db->query($sql);

    }

    // Получаем комментарии по странице
    public function getByPageId($page_id){
        $page_id = (int)$page_id;
        $sql = "select * from comments where page_id = {$page_id}";
        return $this->db->query($sql);
    }

    // Добавление комментария
    public function add($page_id, $data){
        if( !isset($data['msg']) || !isset($data['email']) ){
            return null;
        }

        $page_id = (int)$page_id;
        $email = $this->db->escape($data['email']);
        $msg = $this->db->escape($data['msg']);

        $sql = "
          insert into comments 
            set page_id = {$page_id},
                email = '$email',
                msg = '$msg'
        ";

        if($this->db->query($sql)){
            return $this->db->insertId();
        } else {
            return false;
        }
    }

}