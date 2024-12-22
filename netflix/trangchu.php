<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            background-color: #54b4ed;
            padding: 20px;
        }

        nav a {
            text-decoration: none;
            color: black;
            padding: 20px
        }

        nav a:hover {
            background-color: #007804;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header('loginn.php');
    }
    ?>
    <h1> TRANG CHỦ </h1>
    <nav>
        <a href="trangchu.php?page_layout=thongtinsinhvien"> Thông tin sinh viên </a>
        <a href="trangchu.php?page_layout=themthongtinsinhvien">Thêm thông tin sinh viên </a>
        <a href="trangchu.php?page_layout=lienhe">Liên hệ </a>
    </nav>

</body>
<?php
if (isset($_GET['page_layout'])) {
    switch ($_GET['page_layout']) {
        case 'thongtinsinhvien':
            include('thongtinsinhvien.php');
            break;
        case 'themthongtinsinhvien':
            include('themthongtinsinhvien.php');
            break;
        case 'lienhe':
            include('lienhe.php');
            break;
        case 'suathongtinsinhvien':
            include('suathongtinsinhvien.php');
            break;
        case 'xulyxoathongtinsinhvien':
            include('xulyxoathongtinsinhvien.php');
            break;
    }
}
?>


</html>