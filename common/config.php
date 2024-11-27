<?php
    $host = 'localhost';
    $username = 'root';
    $password = 'cs123';
    $database = 'sim_management';
        
    $db = mysqli_connect($host, $username, $password, $database);
    return $db;
?>
