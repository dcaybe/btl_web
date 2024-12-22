<?php
include("connect.php");
$ma_sp = $_GET['ma_sp'];
$sql = "DELETE FROM `san_pham` WHERE ma_sp = '$ma_sp'";
// echo $sql;
mysqli_query($conn, $sql);
header('location: index.php?page_layout=xem');
