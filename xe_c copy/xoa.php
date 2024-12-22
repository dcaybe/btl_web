<?php
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM `xe` WHERE id = '$id'";
// echo $sql;
mysqli_query($conn, $sql);
header('location: index.php?page_layout=xem');
