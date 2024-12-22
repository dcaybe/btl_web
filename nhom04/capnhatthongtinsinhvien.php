<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .add{
            background-color: green;
            color: white;   
            border: 1px solid green;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .add:hover{
            background-color: rgb(136, 234, 136);
            border: 1px solid rgb(136, 234, 136);
        }

        .box{
            background-color: antiquewhite;
            width: 700px;
            margin: 10px auto;
            padding: 10px;
            border-radius: 10px;
        }
        form{
            margin: 20px;
        }

        .row{
            display: flex;
        }

        .field{
            margin: 10px;
        }

        p{
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <?php
        include('connect.php');
        $maSinhVien = $_GET['id']; 
        $sql = "select * from sinh_vien where ma_sv = '$maSinhVien';";
        $result= mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
    ?>
    <div class="box">
        <h1>Cập nhật thông tin sinh viên</h1>
        <form action="xulycapnhatthongtinsinhvien.php?id=<?php echo $row["ma_sv"] ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="field"> 
                    <p>Mã sinh viên</p>
                    <input type="text" name="masinhvien" placeholder="Mã sinh viên" value="<?php echo $row['ma_sv'] ?>" disabled>
                </div>
                <div class="field"> 
                    <p>Tên sinh viên</p>
                    <input type="text" name="tensinhvien" placeholder="Mã sinh viên" value="<?php echo $row['tensv']; ?>" disabled>
                </div>
                <div class="field"> 
                    <p>Số điện thoại</p>
                    <input type="text" name="sodienthoai" placeholder="Số điện thoại" value="<?php echo $row['sdt']; ?>" >
                </div>
            </div>
            <div class="row">
                <div class="field"> 
                    <p>Giới tính</p>
                    <input type="radio" name="gioitinh" value="0" <?php echo ($row['gioi_tinh'] == 0) ? 'checked' : ''; ?> disabled>Nữ
                    <input type="radio" name="gioitinh" value="1" <?php echo ($row['gioi_tinh'] == 1) ? 'checked' : ''; ?> disabled>Nam
                </div>
                <div class="field"> 
                    <p>Ngày sinh</p>
                    <input type="date" name="ngaysinh" placeholder="Ngày sinh" value="<?php echo $row['ngay_sinh']; ?>" disabled>
                </div>  
                <div class="field"> 
                    <p>Ảnh đại diện</p>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
            </div>
            <div class="row">
                <div class="field"> 
                    <p>Địa chỉ</p>
                    <input type="text" name="diachi" placeholder="Địa chỉ" value="<?php echo $row['dia_chi']; ?>">
                </div>
                <div class="field"> 
                    <p>Tên đăng nhập</p>
                    <input type="text" name="tendangnhap" placeholder="Têng đăng nhập" value="<?php echo $row['username']; ?>">
                </div>
                <div class="field"> 
                    <p>Mật khẩu</p>
                    <input type="text" name="matkhau" placeholder="Mật khẩu" value="<?php echo $row['password']; ?>">
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <input class="add" type="submit" value="Cập nhật thông tin">
            </div>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>