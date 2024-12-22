    <?php
    require 'connect.php';

    if (
        !empty($_POST['bien']) &&
        !empty($_POST['ten'])
    ) {


        $id = $_POST['id'];

        $bien = $_POST['bien'];
        $ten = $_POST['ten'];
        $sql = "UPDATE xe
    SET 
    `bien` = '$bien',
    `ten` = '$ten'
    WHERE `id` = '$id'";


        if (mysqli_query($conn, $sql)) {
            // Nếu hợp lệ, chuyển hướng sang trang chủ
            header("Location: index.php?page_layout=xem");
        } else {
            echo "Có lỗi trong quá trình lưu dữ liệu.";
        }
    } else echo ('Hãy nhập đầy đủ thông tin');
    ?>
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
        <?php

        $id = $_GET['id'];
        $sql = "select * from xe where id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <form action="sua.php" method="post">
            <input type="text" hidden name="id" value="<?php echo $row['id']; ?>">
            <div>
                <p>Tên</p>
                <input type="text" name="ten" placeholder="Tên sinh viên" value="<?php echo $row['ten']; ?>">
            </div>
            <div>
                <p>Biển</p>
                <input type="text" name="bien" placeholder="Biển xe" value="<?php echo $row['bien']; ?>">

            </div>
            <div>
                <input class="add" type="submit" value="Thêm">
            </div>


        </form>

    </body>


    </html>