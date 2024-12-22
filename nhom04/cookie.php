<?php
    // 1. Cookie
    $cookieName = "user";
    $cookieValue = "NgocAnh";
    setcookie($cookieName, $cookieValue, time()+(86400), "/");
    //Kiểm tra đã tồn tại chưa 
    if(isset($_COOKIE[$cookieName])){
        echo "cookie đã tồn tại";
    }
    else{
        echo "cookie không tồn tại";
    }
    //Hàm setcookie() trong PHP 
    //được sử dụng để thiết lập một cookie
    // cú pháp setcookie($name, $value, $expire, $path);
    // $name: là tên của cookie.
    // $value: là giá trị của cookie.
    // $expire: là thời điểm hết hạn của cookie, được định dạng là thời gian Unix timestamp
    //         VD: 1 ngày = 24 x 60 x 60 = 86400
    // $path: là đường dẫn trên máy chủ mà cookie có thể được truy cập. 
    //        "/" cho biết cookie có thể được truy cập từ bất kỳ đường dẫn nào trên trang web.

    // 2. session
    session_start();
    $_SESSION["password"] = "hello123";

    echo $_SESSION["password"];
?>

