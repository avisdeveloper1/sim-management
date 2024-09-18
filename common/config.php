<?php
class Dbconfig {
    public function dbConnection(){
        $db = array("connect" => "", "error" => false, "message" => "");
        $host = 'localhost';
        $username = 'root';
        $password = 'cs123';
        $database = 'sim_management';
        
        $db = mysqli_connect($host, $username, $password, $database);
        return $db;
    }   
}
?>