<?php

class cart{

    public $db = null;

    public function __construct(dbcontroller $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function insertintocart($params = null, $table = "cart"){
        if($this->db->con != null){
            if($params != null){
                $columns = implode(',', array_keys($params));
                $values = implode("','", array_values($params));

                $query_string = sprintf("INSERT INTO %s (%s) VALUES ('%s')", $table, $columns, $values);

                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    public function addtocart($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );
            $result = $this->insertintocart($params);
            if($result){
                header("location: " . $_SERVER['PHP_SELF']);
            }
            
        }
    }

    public function deletecart($item_id = null, $table = 'cart'){
        if($item_id !=null){
            $result = $this->db->con->query("DELETE FROM $table WHERE item_id = $item_id");
            if($result){
                header("location: " . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

}