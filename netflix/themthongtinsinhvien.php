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

    <h1>Thêm thông tin sinh viên</h1>
    <form action="xulythemthongtinsinhvien.php" method="post" enctype="multipart/form-data">
        <div>
            <p>Mã sinh viên</p>
            <input type="text" name="masinhvien" placeholder="Mã sinh viên">
        </div>
        <div>
            <p>Tên sinh viên</p>
            <input type="text" name="tensinhvien" placeholder="Mã sinh viên">
        </div>
        <div>
            <p>Giới tính</p>
            <input type="radio" name="gioitinh" value="0">Nữ
            <input type="radio" name="gioitinh" value="1">Nam
        </div>
        <div>
            <p>Ngày sinh</p>
            <input type="date" name="ngaysinh" placeholder="Ngày sinh">
        </div>
        <div>
            <p>Địa chỉ</p>
            <input type="text" name="diachi" placeholder="Địa chỉ">
        </div>
        <div>
            <p>Số điện thoại</p>
            <input type="text" name="sodienthoai" placeholder="Số điện thoại">
        </div>
        <div>
            <p>Tên đăng nhập</p>
            <input type="text" name="tendangnhap" placeholder="Têng đăng nhập">
        </div>
        <div>
            <p>Mật khẩu</p>
            <input type="text" name="matkhau" placeholder="Mật khẩu">
        </div>
        <div>
            <p>Thêm ảnh</p>
            <input type="file" name="fileToUpload" id="fileToUpload">

        </div>
        <div>
            <input class="add" type="submit" value="Thêm">
        </div>
    </form>
</body>

</html> 
