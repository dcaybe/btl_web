<?php
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM `article` WHERE id = '$id'";
// echo $sql;
mysqli_query($conn, $sql);
header('location: trangchu.php?page_layout=tin_tuc');
