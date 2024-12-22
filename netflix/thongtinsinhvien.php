<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            height: 100px;
            width: 100px;
            
        }
    </style>
</head>

<body>

    <h1>Thông tin sinh viên</h1>
    <table border=1>
        <tr>
            <th>Mã sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Têng đăng nhập</th>
            <th>Mật khẩu</th>
            <th>Avatar </th>
            <th>Chức năng</th>
        </tr>
        <?php
        include('connect.php');
        $sql = "select * from sinh_vien";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['ma_sv']; ?></td>
                <td><?php echo $row['tensv']; ?></td>
                <td><?php
                    if ($row['gioi_tinh'] == 0) {
                        echo "Nữ";
                    } else {
                        echo "Nam";
                    }
                    ?></td>
                <td><?php echo $row['ngay_sinh']; ?></td>
                <td><?php echo $row['dia_chi']; ?></td>
                <td><?php echo $row['sdt']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><img src="<?php echo $row['image_path'] ?>"></td>

                <td><a class="sua" href="trangchu.php?page_layout=suathongtinsinhvien&id=<?php echo $row["ma_sv"] ?>">sua</a>
                    <a class="xoa" href="trangchu.php?page_layout=xulyxoathongtinsinhvien&id=<?php echo $row["ma_sv"] ?>">Xoá</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>