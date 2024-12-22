<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //1. cookie
    $cookieName = 'user';
    $cookieValue = 'Hung';
    // kiểm tra đã tồn tại chưa
    if (isset($_COOKIE[$cookieName])) {
        echo 'cookie đã tồn tại';
    } else {
        echo 'cookie không tồn tại';
    }
    //hàm setcookie trong php
    //được sử dụng để thiết lập một cookie
    //cú pháp setcookie($name,$value,$expire,$path);
    //$name là tên của cookie
    //$value là giá trị của cookie
    //$expire là thời điểm hết hạn của cookie, được định dạng thòi gian unix timetamp VD: 1 ngày = 24 x 60 x 60 = 86400
    //$path là đường dẫn trên máy chủ mà coolie có thể truy cập được.
    // '/' cho biết cookie có thể được truy cập từ bất kì đường dẫn nào trên trang web



    //2.session
    session_start();
    $_SESSION['password'] = 'hello123';

    echo $_SESSION['password'];
    ?>
</body>

</html>