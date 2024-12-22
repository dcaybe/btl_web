<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        a.sua{
            padding: 10px 20px;
            margin: 5px;
        }


        a.xoa{
            padding: 10px 20px;
        }
        
        .sua{
            background-color: green;
            color: white;
            border-radius: 10px;
        }

        .xoa{
            background-color: red;
            color: white;
            border-radius: 10px;
        }

        table{
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,th{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <h1>Thông tin sinh viên</h1>
    <table>
        <tr>
            <th>Mã sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Têng đăng nhập</th>
            <th>Mật khẩu</th>
            <th>Ảnh đại diện</th>
            <th>Chức năng</th>
        </tr>
        <?php
            include('connect.php');
                $sql = "select * from sinh_vien";
                $result= mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['ma_sv']; ?></td>
            <td><?php echo $row['tensv']; ?></td>
            <td><?php
                if($row['gioi_tinh'] == 0){
                    echo "Nữ";
                }
                else{
                    echo "Nam";
                }
            ?></td>
            <td><?php echo $row['ngay_sinh']; ?></td>
            <td><?php echo $row['dia_chi']; ?></td>
            <td><?php echo $row['sdt']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password'];?></td>
            <td><img src="<?php echo $row['image_path'];?>"></td>
            <td>
                <a class="sua" href="trangchu.php?page_layout=capnhatthongtinsinhvien&id=<?php echo $row["ma_sv"] ?>">Cập nhật</a>
                <a class="xoa" href="trangchu.php?page_layout=xulyxoathongtinsinhvien&id=<?php echo $row["ma_sv"] ?>">Xoá</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>