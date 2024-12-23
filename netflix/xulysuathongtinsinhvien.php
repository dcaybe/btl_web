<?php
include('connect.php'); 
$maSinhVien = $_POST['id'];
$diaChi = $_POST['diachi'];
$soDienThoai = $_POST['sodienthoai'];
$matKhau = $_POST['matkhau'];
$sql = "UPDATE `sinh_vien`
        SET 
        `dia_chi` = '$diaChi',
        `sdt` = '$soDienThoai',
        `password` = '$matKhau'
        WHERE `ma_sv` = '$maSinhVien'";
// echo $sql;
mysqli_query($conn, $sql);
// Nếu hợp lệ, chuyển hướng sang trang chủ
header("location: trangchu.php?page_layout=thongtinsinhvien");
// }
// else{
//     echo "Vui lòng nhập đầy đủ thông tin";
// }
?>


