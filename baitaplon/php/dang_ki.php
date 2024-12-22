<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devie-width, initial-scale=1.0">
    <title> Document</title>
    <link rel="stylesheet" href="../assets/css/dang_ki.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>


<body background="https://lolstatic-a.akamaihd.net/rso-authenticator-ui/0.78.34/assets/arcane2_dsktp_signup_BG_2x.jpg">
    <!-- <div class="nen">
        <img src="https://lolstatic-a.akamaihd.net/rso-authenticator-ui/0.78.34/assets/arcane2RiotLogoSmall.svg" width="130px" height="40px">
    </div> -->
    <form action="add_user.php" method="post" enctype="multipart/form-data">
        <div class="list">
            <div class="content" id="content">
                <div class="main">
                    <b>
                        <font size="5">Email của bạn là gì?</font>
                    </b>

                    <p>
                        <font size="5">
                            <font color="#94A3CD">Đừng lo, chúng tôi sẽ không <br> tiết lộ với ai đâu.</font>
                        </font>
                    </p>

                    <!-- nhập email -->
                    <div class="text">
                        <input name="email" style="width: 250%; height: 68%;" type="text" class="text1" placeholder="EMAIL">

                    </div>
                    <div class="box">
                        <input type="checkbox">
                        <font size="2">Đồng ý; Riot có thể gửi cho tôi thông tin về những <br>bản phát hành, cập nhật trò
                            chơi, sự kiện hoặc các nội dung/vật phẩm mới nhất của Riot.</font>
                        <br>
                        <div class="box1"> <b>
                                <font size="1">
                                    <font color="#94A3CD">BẠN CŨNG CÓ THỂ TẠO TÀI KHOẢN VỚI</font>
                                </font>
                            </b>
                        </div>
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




                    <div class="dangnhap">
                        <button onclick="scroll_right1()" type="button">

                            <span class="button-icon">
                                <i class='fas fa-arrow-right ' style="color: rgb(77, 101, 172);"></i>
                            </span>

                        </button>
                    </div>


                    <div class="taomoi">
                        <a href="" class="a">ĐÃ CÓ SẴN TÀI KHOẢN?</a><br>

                    </div>
                </div>
                <div class="border_main">
                    <div class="main">
                        <b>
                            <font size="5">Chọn tên người dùng</font>
                        </b>

                        <p>
                            <font size="5">
                                <font color="#94A3CD">Được sử dụng để đăng nhập tất cả trò <br> chơi của chúng tôi.</font>
                            </font>
                        </p>

                        <!-- nhập email -->
                        <div class="text">
                            <input name="username" style="width: 250%; height: 68%;" type="text" class="text1" placeholder="Tên người dùng">

                        </div>
                        <div class="box">
                            <!-- <input type="checkbox">
                       <font size="2">Đồng ý; Riot có thể gửi cho tôi thông tin về những <br>bản phát hành, cập nhật
                            trò
                            chơi, sự kiện hoặc các nội dung/vật phẩm mới nhất của Riot.</font>
                        <br>
                        <div class="box1"> <b>
                                <font size="1">
                                    <font color="#94A3CD">BẠN CŨNG CÓ THỂ TẠO TÀI KHOẢN VỚI</font>
                                </font> 
                            </b>
                        </div> -->
                        </div>

                        <div class="login">
                            <!-- <div class="login1">
                            <a href="#" class="buttonFacebook">
                                <span class="button-icon">
                                    <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                                </span>
                            </a>
                            <a href="" class="buttonGoogle">
                                <span class="button-icon">
                                    <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg"
                                        height="15">
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
                        </div> -->
                        </div>




                        <div class="dangnhap">
                            <button onclick="scroll_right2()" type="button">

                                <span class="button-icon" type="button">
                                    <i class='fas fa-arrow-right ' style="color: rgb(77, 101, 172);"></i>
                                </span>

                            </button>
                        </div>


                        <div class="taomoi">
                            <a href="" class="a">ĐÃ CÓ SẴN TÀI KHOẢN?</a><br>

                        </div>
                    </div>
                </div>
                <div class="border_main">
                    <div class="main">
                        <b>
                            <font size="5">Chọn mật khẩu</font>
                        </b>

                        <p>
                            <font size="5">
                                <font color="#94A3CD">Hãy đảm bảo mật khẩu đủ mạnh.</font>
                            </font>
                        </p>

                        <!-- nhập email -->
                        <div class="text">
                            <input name="password" style="width: 250%; height: 68%;" type="text" class="text1" placeholder="Mật khẩu">

                        </div>
                        <div class="box">
                            <!-- <input type="checkbox">
                        <font size="2">Đồng ý; Riot có thể gửi cho tôi thông tin về những <br>bản phát hành, cập nhật
                            trò
                            chơi, sự kiện hoặc các nội dung/vật phẩm mới nhất của Riot.</font>
                        <br>
                        <div class="box1"> <b>
                                <font size="1">
                                    <font color="#94A3CD">BẠN CŨNG CÓ THỂ TẠO TÀI KHOẢN VỚI</font>
                                </font>
                            </b>
                        </div> -->
                        </div>

                        <div class="login">
                            <!-- <div class="login1">
                            <a href="#" class="buttonFacebook">
                                <span class="button-icon">
                                    <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                                </span>
                            </a>
                            <a href="" class="buttonGoogle">
                                <span class="button-icon">
                                    <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg"
                                        height="15">
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
                        </div> -->
                        </div>




                        <div class="dangnhap">
                            <button class="add" type="submit">

                                <span class="button-icon">
                                    <i class='fas fa-arrow-right ' style="color: rgb(77, 101, 172);"></i>
                                </span>

                            </button>
                        </div>


                        <div class="taomoi">
                            <a href="" class="a">ĐÃ CÓ SẴN TÀI KHOẢN?</a><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="end">
            <a href="" class="b1">HỖ TRỢ&nbsp;&nbsp;&nbsp;&nbsp;CHÍNH SÁCH QUYỀN RIÊNG TƯ&nbsp;&nbsp;&nbsp;&nbsp;ĐIỀU KHOẢN
                SỬ DỤNG&nbsp;&nbsp;&nbsp;&nbsp;TUỲ CHỌN COOKIE</a><br>
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
    <script>
        function scroll_right1() {
            document.getElementById('content').style = "transform : translateX(-441.837px)"
            console.log('dffdf')
        }

        function scroll_right2() {
            document.getElementById('content').style = "transform : translateX(-883.674px)"
            console.log('dffdf')
        }
    </script>
</body>

</html>