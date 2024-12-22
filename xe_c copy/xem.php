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
        td{
            height: 30px;;
        }
    </style>
</head>

<body>
    <h1>Thông tin xe trong bãi</h1>

    <table border="1">
        <tr>
            <th>id</th>
            <th>Biển số xe</th>
            <th>Tên</th>
            <th>Tùy chọn</th>
        </tr>
        <?php
        include('connect.php');
        $sql = "select * from xe";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['bien']; ?></td>
                <td><?php echo $row['ten']; ?></td>
                <td><a style="background-color: green;" class="sua" href="index.php?page_layout=sua&id=<?php echo $row['id'] ?>">sua</a>
                    <a style="background-color: red;" class="xoa" href="index.php?page_layout=xoa&id=<?php echo $row['id'] ?>">Xoá</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>