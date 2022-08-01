<?php

class product
{
    public $db = null;

    public function __construct(dbcontroller $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }


    public function getdata($table = 'product'){

        $result = $this->db->con->query("SELECT * FROM ($table)");

        $resultarray = array();
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultarray[] = $item;
        }

        return $resultarray;
    }

    public function getproduct($item_id = null, $table = 'product'){
        if(isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM ($table) WHERE item_id = $item_id");
            $resultarray = array();
            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultarray[] = $item;
            }
    
            return $resultarray;
        }
    }

}