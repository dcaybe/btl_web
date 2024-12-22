    <?php
    require 'connect.php';

    if (
        !empty($_POST['ma_sp']) &&

        !empty($_POST['ten_sp']) &&
        !empty($_POST['browsers_1']) &&
        !empty($_POST['gia_ban']) &&
        !empty($_POST['browsers_2'])
    ) {


        $ma_sp = $_POST['ma_sp'];
        $ten_sp = $_POST['ten_sp'];
        $loai_sp = $_POST['browsers_1'];
        $gia_ban = $_POST['gia_ban'];
        $tinh_trang = $_POST['browsers_2'];

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

        $ma_sp = $_GET['ma_sp'];
        $sql = "select * from san_pham where ma_sp = $ma_sp";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <form action="sua.php" method="post">

            <div>
                <p>Mã sản phẩm</p>
                <input type="text" name="ma_sp" placeholder="Mã ">
            </div>
            <div>
                <p>Tên sản phẩm</p>
                <input type="text" name="ten_sp" placeholder="Tên ">

            </div>


            <div>
                <p>Loại</p>
                <input type="text" name="browsers_1" placeholder="loai ">

                <!-- <select name="browsers_1">
                <option value="0"> dien thoai</option>
                <option value="1">Phu kien</option>
                <option value="2">tai nghe</option>
                <option value="3">tai nghe</option>
                <option value="4">sac</option>
            </select> -->

            </div>
            <div>
                <p>Giá bán</p>
                <input type="text" name="gia_ban" placeholder="giá ">

            </div>
            <div>
                <p>Tình trạng</p>
                <input type="text" name="browsers_2" placeholder="tinh trang ">

                <!-- <select name="browsers_2">
                <option value="0">con hang</option>
                <option value="1">het</option>
            </select> -->

            </div>
            <div>
                <input class="add" type="submit" value="Thêm">
            </div>


        </form>

    </body>


    </html>