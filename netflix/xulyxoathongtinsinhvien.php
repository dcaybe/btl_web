<?php
include("connect.php");
$maSinhVien = $_GET['id'];
$sql = "DELETE FROM `sinh_vien` WHERE ma_sv = '$maSinhVien'";
// echo $sql;
mysqli_query($conn, $sql);
header('location: trangchu.php?page_layout=thongtinsinhvien');
