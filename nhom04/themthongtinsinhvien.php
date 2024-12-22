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
    <div class="box">
        <h1>Thêm thông tin sinh viên</h1>
        <form action="xulythemthongtinsinhvien.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="field"> 
                    <p>Mã sinh viên</p>
                    <input type="text" name="masinhvien" placeholder="Mã sinh viên">
                </div>
                <div class="field"> 
                    <p>Tên sinh viên</p>
                    <input type="text" name="tensinhvien" placeholder="Mã sinh viên">
                </div>
                <div class="field"> 
                    <p>Số điện thoại</p>
                    <input type="text" name="sodienthoai" placeholder="Số điện thoại">
                </div>
            </div>
            <div class="row">
                <div class="field"> 
                    <p>Giới tính</p>
                    <input type="radio" name="gioitinh" value="0" checked>Nữ
                    <input type="radio" name="gioitinh" value="1">Nam
                </div>
                <div class="field"> 
                    <p>Ngày sinh</p>
                    <input type="date" name="ngaysinh" placeholder="Ngày sinh">
                </div>  
                <div class="field"> 
                    <p>Ảnh đại diện</p>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
            </div>
            <div class="row">
                <div class="field"> 
                    <p>Địa chỉ</p>
                    <input type="text" name="diachi" placeholder="Địa chỉ">
                </div>
                <div class="field"> 
                    <p>Tên đăng nhập</p>
                    <input type="text" name="tendangnhap" placeholder="Têng đăng nhập">
                </div>
                <div class="field"> 
                    <p>Mật khẩu</p>
                    <input type="text" name="matkhau" placeholder="Mật khẩu">
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <input class="add" type="submit" value="Thêm thông tin">
            </div>
        </form>
    </div>
</body>
</html>