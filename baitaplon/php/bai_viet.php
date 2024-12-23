<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\assets\css\tao_tin_tuc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

    <div style="margin-top: 100px;">

        <div class="content_bai_viet">
            <div class="list_icon">
                <i style="display: block;" class="fa-brands fa-reddit"></i>
                <i style="display: block;" class="fa-brands fa-x-twitter"></i>
                <i style="display: block;" class="fa-brands fa-facebook"></i>

            </div>
            <?php
            include('connect.php');

            $id = $_GET['id'];
            $sql = "select * from article where `id` = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            ?>
            <div class="warning">
                <div class="exits_delete"><button onclick="exist_delete()"><i class="fa-solid fa-x"></i></button></div>
                <i style="font-size: 200px;" class="fa-solid fa-triangle-exclamation"></i>
                <p style="font-size: 30px;">XÓA BÀI VIẾT</p>
                <div class="warning_btn"><a href="xu_li_xoa_bai_viet.php?id=<?php echo $id  ?>">Done</a></div>

            </div>
            <div class="option">
                <div class="delete_option">
                    <button class="delete_option" onclick="deleteArticle()"><i style="color:red" class="fa-solid fa-trash"></i></button>
                    <a href="sua_bai_viet.php?id=<?php echo $id; ?>"><i style="color: yellow;" class="fa-solid fa-pencil"></i></a>
                </div>

            </div>
            <div class="left_content">
                <div class="mac mac--absolut">Tin tức</div>
                <h1><?php echo $row['title']; ?></h1>
                <div class="date"><?php echo $row['date']; ?></div>

                <div class="img_1">
                    <img height="400px" src="<?php echo $row['image_link']; ?>" alt="">
                </div>
                <div>
                    <p class="text--size">
                        <?php echo $row['content']; ?>
                    </p>
                </div>
            </div>
            <div class="right_content">
                <h1>Lates news</h1>
                <?php
                $sql = "SELECT * FROM article ORDER BY id DESC LIMIT 6";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <a style="color: #000;" href="<?php
                                                    if ($row['type'] == 0) {
                                                        echo $row['link_video'];
                                                    } else {
                                                        echo $row['image_link'];
                                                    }
                                                    ?>">
                        <div class="item">
                            <div class="img_right">
                                <img height="200px" width="389.062px" src="<?php echo $row['image_link']; ?>" alt="">
                            </div>
                            <div>
                                <div style="display: flex;  margin: 10px 0;">
                                    <div class="mac">Tin tức</div>
                                    <div><?php echo $row['date']; ?></div>
                                </div>

                            </div>
                            <div>
                                <b class="text--size"><?php echo $row['title']; ?></b>
                            </div>

                        </div>
                    </a>
                <?php
                }
                ?>

            </div>
        </div>
    </div>

    <div class="footer">
        <div class="main_footer">
            <div class="main_footer_top">
                <div class="main_footer_top_right">
                    <div class="main_footer_top_svg">
                        <svg width="38" height="40" dataname="Layer 1" viewBox="0 0 185.47 163.51">
                            <path class="cls-1"
                                d="M98.77 0L0 45.74l24.61 93.66 18.73-2.3-5.15-58.89 6.15-2.74 10.62 60.2 32.01-3.93-5.69-65 6.09-2.71 11.68 66.23 32.38-3.98-6.23-71.25 6.16-2.74 12.77 72.43 32.01-3.93V19.38L98.77 0zm2.32 142.05l1.63 9.22 73.42 12.24v-30.68l-75.01 9.21-.04.01zM176.17.71V0h3.64v.71zm1.41 3.94V.4h.81v4.25zm3 0V0h.8v4.65zm2.21 0L180.73 0h.83L183 3.41 184.44 0h.84l-2.06 4.65zm1.83 0V0h.81v4.65z">
                            </path>
                        </svg>
                    </div>
                    <div class="main_footer_beteewn">
                        <ul class="list_main_footer_top_ul">
                            <li><a href="">BÁO CHÍ</a></li>
                            <li><a href="">BẢO MẬT</a></li>
                            <li><a href="">PHÁP LÍ</a></li>
                            <li><a href="">ĐIỀU KHOẢN SỬ DỤNG</a></li>
                            <li><a href="">CHÍNH SÁCH VÀ QUYỀN RIÊNG TƯ</a></li>
                            <li><a href="">HỖ TRỢ NGƯỜI CHƠI</a></li>
                            <li><a href="">XÁC MINH ĐIỆN TỬ</a></li>
                            <li><a href="">KHẢ NĂNG TIẾP CẬN</a></li>
                        </ul>
                    </div>
                </div>
                <div class="list_icon_beteewn_footer">
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="high_line_footer"></div>
            <div class="credit">
                <div class="left_credit"><a href=""><span>Tùy Chọn Cookie</span> &nbsp | &nbsp © năm 2024 bởi Riot
                        Games, Inc. Đã đăng ký bản
                        quyền.</a></div>
                <div class="right_credit"><a href=""><span>TỚI ĐẦU TRANG</span></a></div>
            </div>
        </div>
    </div>
    <script>
        function deleteArticle() {
            document.getElementsByClassName("warning")[0].style = " display: inline ; "
        }

        function exist_delete() {
            document.getElementsByClassName("warning")[0].style = " display: none ; "
        }
    </script>
</body>

</html>