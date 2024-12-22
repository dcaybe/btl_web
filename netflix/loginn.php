<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="loginn.php" method="post">
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
    include('connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $userName =  $_POST['username'];
        $passWord = $_POST['password'];

        $sql = "SELECT * FROM `sinh_vien` WHERE username = '$userName' AND password = '$passWord'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION["username"] = $userName;
            header('location: trangchu.php');
        } else {
            echo "<div class='warning'>Sai thông tin đăng nhập</div>";
        }
    }
    ?>

</body>

</html>