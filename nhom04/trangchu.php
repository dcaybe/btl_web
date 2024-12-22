<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
       
        <style>
            nav{
                background-color: #54b4eb;
                padding: 20px;
                display: flex;
                justify-content: space-between;
            }
            a{
                text-decoration:none;
                color: white;
                padding: 20px
            }
            a:hover{
                background-color:#0078D4;
            }
        </style>
        <link rel="stylesheet" href="css/snow.css">
    </head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION["username"])){
                header('location: login.php');
            }
        ?>
        <div class="snowfall">
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <div class="snowflake"></div>
            <nav>
                <div>
                    <a href="trangchu.php?page_layout=thongtinsinhvien">Thông tin sinh viên</a>
                    <a href="trangchu.php?page_layout=themthongtinsinhvien">Thêm thông tin sinh viên</a>
                    <a href="trangchu.php?page_layout=lienhe">Liên hệ</a>
                </div>
                <div>
                    <a href="trangchu.php?page_layout=logout">Đăng xuất</a>
                </div>
            </nav>
    
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'thongtinsinhvien':
                    include('thongtinsinhvien.php');
                    break;
                case 'themthongtinsinhvien':
                    include('themthongtinsinhvien.php');
                    break;
                case 'lienhe':
                    include('lienhe.php');
                    break;
                case 'xulyxoathongtinsinhvien':
                    include('xulyxoathongtinsinhvien.php');
                    break;
                case 'capnhatthongtinsinhvien':
                    include('capnhatthongtinsinhvien.php');
                    break;
                case 'logout':
                    session_destroy();
                    session_unset();
                    header('location: login.php');
                    break;
            }
        }
    ?>
        </div>
    </body>
</html>