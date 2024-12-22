<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            tên đăng nhập:
            <input type="text" name="username" placeholder="tên đăng nhập">
        </div>
        <div>
            mật khẩu:
            <input type="password" name="password" placeholder="mật khẩu">
        </div>
        <div>
            <input type="submit" value="đăng nhập">
        </div>
    </form>
    <?php
    if(isset($_GET['username'])&& isset($_GET['password'])){
        echo $_GET['username'];
        echo $_GET['password'];
    }
    echo "<br>";
    ?>
        <form action="">
        <div>
            tên đăng nhập:
            <input type="text" name="username" placeholder="tên đăng nhập">
        </div>
        <div>
            mật khẩu:
            <input type="password" name="password" placeholder="mật khẩu">
        </div>
        <div>
            <input type="submit" value="đăng nhập">
        </div>
    </form>
    <?php
    if(isset($_GET['username'])&& isset($_GET['password'])){
        $_username = $_GET['username'];
        $_password = $_GET['password'];
        if( $_username=='admin' && $_password=='8386'){
            session_start();
            $_SESSION["username"] = "admin";
            header(header: 'location:trangchu.php');
        }
        else{
            echo "<div style='color:red';>sai thông tin đăng nhập</div>";
        }
    }
    //1 cookie
    $cookieName = "user";
    $cookieValue = "ThanhCong";
    setcookie($cookieName, $cookieValue, time()+(8386), "/");
    //kiểm tra đã tồn tại chưa
    if(isset($_COOKIE[$cookieName])){
        echo "cookie đã tồn tại";
    }
    else{
        echo "cookie không tồn tại";
    }
    //Hàm setcookie() trong PHP
    //được sửu dụng để thiết lập 1 cookie
    //cú pháp setcookie($name, $value, $expire, $path);
    //$name: là tên của 1 cookie
    //value: là giá trị của cookie
    //$expire là thời điểm hết hạn của cookie, được định dạng thòi gian unix timetamp VD: 1 ngày = 24 x 60 x 60 = 86400
    //$path là đường dẫn trên máy chủ mà coolie có thể truy cập được.
    // '/' cho biết cookie có thể được truy cập từ bất kì đường dẫn nào trên trang web

    //2.sesion
    session_start();
    $_SESSION["password"] = "hello123";
    ?>
</body>
</html>