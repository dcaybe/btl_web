    <?php
    include('connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $userName =  $_POST['username'];
        $passWord = $_POST['password'];
        $sql = "SELECT * FROM `user` WHERE user_name = '$userName' AND password = '$passWord'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION["user_name"] = $userName;
            header('location: trangchu_login.php?page_layout=home');
        } else {
            echo "<div class='warning'>Sai thông tin đăng nhập</div>";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Document</title>
        <link rel="stylesheet" href="../assets/css/dang_nhap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    </head>


    <body background="https://lolstatic-a.akamaihd.net/rso-authenticator-ui/0.78.34/assets/arcane2_dsktop_signin_BG_2x.jpg">
        <form action="dang_nhap.php" method="post">
            <div class="nen">
                <img src="https://lolstatic-a.akamaihd.net/rso-authenticator-ui/0.78.34/assets/arcane2RiotLogoSmall.svg" width="130px" height="40px">
            </div>
            <div class="main">
                <b>
                    <font size="5">Đăng nhập</font>
                </b>


                <div class="text">
                    <input style="width: 250%; height: 62%;" type="text" class="text1" placeholder="TÊN NGƯỜI DÙNG" name="username">
                    <input style="width: 250%; height: 62%;" type="text" class="text1" placeholder="MẬT KHẨU" name="password">
                </div>

                <div class="login">
                    <div class="login1">
                        <a href="#" class="buttonFacebook">
                            <span class="button-icon">
                                <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                            </span>
                        </a>
                        <a href="" class="buttonGoogle">
                            <span class="button-icon">
                                <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" height="15">
                            </span>
                        </a>
                        <a href="" class="buttonApple">
                            <span class="button-icon">
                                <i class="fa-brands fa-apple" style="color: #000000;"></i>
                            </span>
                        </a>


                    </div>
                    <div class="login2">
                        <a href="" class="buttonXbox">
                            <span class="button-icon">
                                <i class="fa-brands fa-xbox" style="color: #ffffff;"></i>
                            </span>
                        </a>
                        <a href="" class="buttonPlaystation">
                            <span class="button-icon">
                                <i class="fa-brands fa-playstation" style="color: #ffffff;"></i>
                            </span>
                        </a>
                    </div>
                </div>


                <div class="box">
                    <input type="checkbox">
                    <font size="2">Lưu đăng nhập</font>
                </div>

                <div class="dangnhap">
                    <button type="submit">
                        <span class="button-icon">
                            <i class='fas fa-arrow-right' style="color: rgb(77, 101, 172);"></i>
                        </span>
                    </button>
                </div>


                <div class="taomoi">
                    <a href="" class="a">KHÔNG THỂ ĐĂNG NHẬP?</a><br>
                    <a href="dang_ki.php" class="a">TẠO TÀI KHOẢN</a>
                </div>
            </div>
            <div class="end">
                <a href="" class="b1">HỖ TRỢ&nbsp;&nbsp;&nbsp;&nbsp;CHÍNH SÁCH QUYỀN RIÊNG TƯ&nbsp;&nbsp;&nbsp;&nbsp;ĐIỀU KHOẢN SỬ DỤNG&nbsp;&nbsp;&nbsp;&nbsp;TUỲ CHỌN COOKIE</a><br>
                <table>

                    <tr>
                        <td>
                            <font size="1"><b>TRANG WEB NÀY ĐƯỢC BẢO MẬT BỞI HCAPTCHA VÀ TUÂN THỦ THEO</b></font>
                        </td>
                        <td><a href="" class="b2">CHÍNH SÁCH QUYỀN RIÊNG TƯ </a></td>
                        <td>
                            <font size="1"><b>VÀ</b></font>
                        </td>
                        <td><a href="" class="b2">ĐIỀU KHOẢN DỊCH VỤ </a></td>
                        <td>
                            <font size="1"><b>CỦA HCAPTCHA.</b></font>
                        </td>
                    </tr>
                </table>
            </div>

        </form>
    </body>

    </html>