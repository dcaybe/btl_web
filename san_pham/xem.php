<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a {
            margin: 0 10px;
        }

        td {
            height: 30px;
            ;
        }
    </style>
</head>

<body>
    <h1>Thông tin sản phẩm</h1>

    <table border="1">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Loại sản phẩm </th>
            <th>Giá bán</th>
            <th>Tình trạng</th>
        </tr>
        <?php
        include('connect.php');
        $sql = "select * from san_pham where tinh_trang = 'con hang' ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['ma_sp']; ?></td>
                <td><?php echo $row['ten_sp']; ?></td>
                <td><?php echo $row['loai_sp']; ?></td>
                <td><?php echo $row['gia_ban']; ?></td>
                <td><?php echo $row['tinh_trang']; ?></td>
                <td><a style="background-color: green;" class="sua" href="index.php?page_layout=sua&ma_sp=<?php echo $row['ma_sp'] ?>">sua</a>
                    <a style="background-color: red;" class="xoa" href="index.php?page_layout=xoa&ma_sp=<?php echo $row['ma_sp'] ?>">Xoá</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>