<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <img src="avatar.png" alt="Avatar" class="avatar">
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật Khẩu" required>
            <button type="submit">Đăng Nhập</button>
            <div id="error-message" class="error"></div>
            <div class="bottom-container">
                <div class="checkbox-container">
                    <input type="checkbox" id="stayIn">
                    <label for="stayIn">Stay in</label>
                </div>
                <div class="help-link">
                    <a href="help.html">Need help?</a>
                </div>
            </div>
        </form>
        <?php
        include('connect.php');
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $userName = $_POST['username'];
            $passWord = $_POST['password'];

            $sql = "SELECT * FROM `sinh_vien` WHERE username = '$userName' AND password = '$passWord'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                session_start();
                $_SESSION["username"] = $userName;
                header('location: trangchu.php?page_layout=thongtinsinhvien');
            }
            else{
                echo "<div class='warning'>Sai thông tin đăng nhập</div>";
            }
        }
    ?>
    </div>
</body>
</html>

</html>