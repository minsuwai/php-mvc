<?php

Trait Database{
    private function connect(){
        $string = "mysql:host=" . DBHOST . ";port=" . DBPORT . ";dbname=" . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Optional: Set the PDO error mode to exception
        return $con;
    }

    public function query($query, $data = []){
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);

        if($check){
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;  
    }

    public function get_row($query, $data = []){
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);

        if($check){
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if(is_array($result) && count($result)) {
                return $result[0];
            }
        }
        return false;
    }    
}

