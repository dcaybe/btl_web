<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức | Riot Games</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/tin_tuc_test.css">
    <link rel="stylesheet" href="../assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="..\JS\home.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <a href="tao_bai_viet.php">
        <div id="tao_bai_viet"><i class="fa-solid fa-plus"></i>

        </div>
    </a>
    <?php
    session_start();
    if (isset($_SESSION["user_name"])) {
        if ($_SESSION["user_name"] == 'Admin') {
            echo '<script>
                    document.getElementById("tao_bai_viet").style.display = "flex";
                  </script>';
        }
    } else {
        echo "User name not found in session.";
    }
    ?>
    <?php
    // Kết nối đến cơ sở dữ liệu
    include('connect.php');

    // Truy vấn bài viết mới nhất
    $sql = "SELECT * FROM article ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <a style="color:#000; display:block" href="<?php
                                                if ($row['type'] == 0) {
                                                    echo $row['link_video'];
                                                } else {
                                                    echo $row['image_link'];
                                                }
                                                ?>">
        <div class="top_slider">
            <div class="slider">
                <div class="title_slider">
                    <p style="font-size: 30px;"><span style="color: #656462;"><b>Cho tôi xem &nbsp;</b></span><span
                            style="color: #FFF;">Toàn bộ &nbsp;</span></p>
                    <i class="fa-solid fa-chevron-down" style="color: #656462;"></i>

                </div>
                <div class="main_slider">
                    <?php
                    include('connect.php');


                    $sql = "select * from article ORDER BY id DESC LIMIT 1";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);


                    ?>
                    <img src="<?php
                                if (!empty($row['image_path']))
                                    echo $row['image_path'];
                                else
                                    echo $row['image_link'];
                                ?>" ; width="1392.6px" height="780px">
                    <div>



                    </div>
                </div>

            </div>
            <div style="height:500px ;background-color:transparent;"></div>
            <div style="height:446.6px ;background-color:#dad9d5;"></div>
            <div style="padding: 0 60px ;background-color:#dad9d5;">
                <div class="title_video_slider">
                    <div class="tin_tuc">
                        Tin tức
                    </div>

                    <p style="font-size: 55px; margin: 20px 0;">
                        <?php echo $row['title']; ?>
                    </p>
                    <div class="describe">

                        <?php echo $row['descri']; ?>
                    </div>
                    <div class="date">
                        <p><?php echo $row['date']; ?></p>
                    </div>
                </div>
            </div>
        </div>


    </a>

    <div class="content">
        <?php
        $sql = "select * from article
WHERE id != (SELECT MAX(id) from article)
ORDER BY id DESC;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="item">
                <img class="img_item"
                    src="<?php
                            if (!empty($row['image_path']))
                                echo $row['image_path'];
                            else
                                echo $row['image_link'];

                            ?>"


                    alt="">

                <div>

                    <div class="title_video_slider">
                        <div class="tin_tuc">
                            Tin tức
                        </div>
                        <p style="font-size: 35px; margin: 20px 0;">
                            <?php
                            echo $row['title'];
                            ?>
                        </p>
                        <div class="describe">
                            <?php
                            echo $row['descri'];
                            ?>
                        </div>
                        <div class="date">
                            <p><?php echo $row['date']; ?></p>
                        </div>
                    </div>

                </div>
            </div>


        <?php

        }

        ?>





    </div>
    <div>
        <button id="loadMore">
            <div class="them_btn">
                <p class="">/ &nbsp; Tải thêm</p>
            </div>
        </button>
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
        if ($_SESSION["user_name"] == 'Admin') {
            document.getElementById('tao_bai_viet').style = "display:flex"
        }




        function scroll_left() {
            document.getElementById('content').style = "transform : translateX(-1312.800px)"
            // document.getElementsByClassName("header")[0].style = "background-color: black ; "
        }

        function scroll_right() {
            document.getElementById('content').style = "transform : translateX(2,625.6px)"
        }


        // hàm thêm item

        list_img_link = [

        ]

        list_describe = [

        ]

        // addEventListener lắng nghe sự kiện
        document.addEventListener('DOMContentLoaded', () => {
            const loadMoreButton = document.getElementById('loadMore');
            const originalDiv = document.getElementById('row');
            let currentArticleCount = 3;

            loadMoreButton.addEventListener('click', () => {
                console.log('click')
                // Số lượng bài viết mới muốn tải thêm
                const newArticles = [
                    'Bài viết 4',
                    'Bài viết 5',
                    'Bài viết 6',
                    'Bài viết 7',
                    'Bài viết 8'
                ];

                const div = document.querySelector('.content');

                // Tạo các thẻ div mới cho các bài viết mới
                newArticles.forEach(articleContent => {
                    const clonedDiv = originalDiv.cloneNode(true); // sao chép và gán cho thẻ mới
                    // const articleDiv = document.createElement('div');
                    // articleDiv.className = 'article';
                    // articleDiv.textContent = articleContent;
                    div.insertBefore(clonedDiv, loadMoreButton); // chèn thẻ clonedDiv vào trc loadMoreButton( nút thêm)
                });

                currentArticleCount += newArticles.length;

                // Ẩn nút "Xem Thêm" khi đã tải đủ bài viết
                // if (currentArticleCount >= 8) {
                //     loadMoreButton.style.display = 'none';
                // }
            });
        });
    </script>
</body>

</html>