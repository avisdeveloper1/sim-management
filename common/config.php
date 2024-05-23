<?php
      $host = 'localhost';
      $username = 'root';
      $password = 'cs123';
      $database = 'sim_management';
      
      // Establishing the connection
      $db = mysqli_connect($host, $username, $password, $database);
      
      // Checking the connection
      if (!$db) {
          die("Connection failed: " . mysqli_connect_error());
      }
?>