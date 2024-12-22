<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .add {
            background-color: green;
            color: white;
        }
    </style>
</head>


<body>
    <h1>Sửa thông tin sinh viên</h1>
    <form action="xulysuathongtinsinhvien.php" method="post">
        <?php
        $maSinhVien = $_GET['id'];



        ?>
        <!-- <div>
            <p>Mã sinh viên muốn sửa</p>
            <input type="text" name="masv" placeholder="Mã sinh viên">
        </div> -->
        <div>
            <p>Địa chỉ</p>
            <input type="text" name="diachi" placeholder="Địa chỉ">
        </div>
        <div>
            <p>Số điện thoại</p>
            <input type="text" name="sodienthoai" placeholder="Số điện thoại">
        </div>
        <div>
            <p>Mật khẩu</p>
            <input type="text" name="matkhau" placeholder="Mật khẩu">
        </div>
        <div>
            <input class="add" type="submit" value="Sua">
        </div>
    </form>
</body>

</html>