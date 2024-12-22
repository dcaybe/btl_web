<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            padding: 20px;
            background-color: pink;
            height: 30px;

        }

        td a {
            text-decoration: none;
            margin-left: 20px;
            width: 25px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.php?page_layout=xem">Xem san pham</a>
        <a href="index.php?page_layout=them">Thêm sp</a>
    </nav>

</body>
<?php

if (isset($_GET['page_layout'])) {
    switch ($_GET['page_layout']) {
        case 'xem':
            include('xem.php');
            break;
        case 'them':
            include('them.php');
            break;
        case 'sua':
            include('sua.php');
            break;
        case 'xoa':
            include('xoa.php');
            break;
    }
}

?>

</html>