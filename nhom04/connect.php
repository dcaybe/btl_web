<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'nhom_4';
   
    $conn = new mysqli($server, $username, $password, $database);

    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfully";
?>