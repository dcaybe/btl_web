<?php
$_server = 'localhost';
$username = 'root';
$password = '';
$database = 'web';

$conn = new mysqli($_server, $username, $password, $database);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
