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
    <form action="xu_li_tao_bai_viet.php" method="post" enctype="multipart/form-data">
        <div class="content">
            <div class="list_icon">
                <i style="display: block;" class="fa-brands fa-reddit"></i>
                <i style="display: block;" class="fa-brands fa-x-twitter"></i>
                <i style="display: block;" class="fa-brands fa-facebook"></i>

            </div>
            <div class="left_content">
                <div class="mac mac--absolut">Tin tức</div>
                <h1>Hãy nhập tiêu đề của bạn</h1>
                <input style="margin-bottom:10px; font-size:32px; margin: bottom 10px;" type="text" name="title" placeholder="Nhập nội dung của tiêu đề">
                <h2>Nhập thêm mô tả cho bài viết của bạn</h2>
                <input style="margin-bottom:10px; font-size:20px;" type="text" name="descri" placeholder="Nhập nội dung của tiêu đề">
                <div class="date">
                    <?php
                    $ngay_hien_tai = date("M d, Y");
                    echo $ngay_hien_tai; // Sẽ in ra: Dec 19, 2024
                    ?>
                </div>

                <div class="img_1">
                    <img style="width: 100%; height:100%;" src="https://img6.thuthuatphanmem.vn/uploads/2022/11/18/hinh-dang-loading_093255098.jpg" alt="img">
                </div>
                <div style="margin-bottom:10px">
                    <p>Thêm ảnh</p>
                    <input type="file" name="fileToUpload" id="fileToUpload">

                </div>
                <div>
                    <p>Hoặc thả đường dẫn ở đây</p>
                    <input type="text" name="image_link">
                </div>
                <!-- <div>
                <p class="text--size">
                    Năm 2024 sắp khép lại. Chúng tôi sẽ tạm thời "rửa tay gác kiếm" để dành thời gian cho gia đình và
                    bạn bè, tận hưởng không khí mùa lễ hội và dĩ nhiên là phải chơi vài trận cho đỡ "xuống tay" rồi.
                    <br><br>
                    Dù đa số các phòng ban của Riot đều dừng hoạt động, một số đội ngũ vận hành máy chủ chính thức, hệ
                    thống chống gian lận và bảo mật sẽ vẫn làm việc để đảm bảo rằng mọi thứ hoạt động một cách trơn tru.
                    <br><br>

                    Chúng tôi đã có một năm thật bùng nổ với tất cả các bạn. Xin gửi lời cảm ơn chân thành đến các khán
                    giả đã khóc cạn nước mắt khi xem Tập 7 của Arcane, những người hâm mộ đã cổ vũ cho ZOFGK khi họ vô
                    địch CKTG (một lần nữa) cùng tất cả những người chơi đã "tất tay" vào Sevika, hồi sinh với Clove,
                    chiến đấu đến cùng trên Con Đường Anh Hùng, phiêu lưu với Kalista trong sự kiện Đại Suy Vong, "phá
                    đảo" Hiểm Họa Đổ Bộ, hoặc triệu hồi Thủy Thần Vĩ Đại cùng Illaoi trong đợt Thử Nghiệm Alpha.
                    <br><br>

                    Ôi trời, danh sách này cứ ngày càng dài thêm sau mỗi năm.
                    <br><br>

                    GGWP và hẹn gặp lại các bạn trong năm 2025 nhé!
                </p>
            </div> -->

                <h2>Nội dung bài viết</h2>
                <div>
                    <textarea style="height: 400px; width:100%" name="content" id=""></textarea>
                </div>
                <div><input type="submit" value="Tạo bài viết"></div>
            </div>
            <div class="right_content">
                <h1>Lates news</h1>
                <div class="item">
                    <div class="img_right"></div>
                    <div>
                        <div style="display: flex;  margin: 10px 0;">
                            <div class="mac">Tin tức</div>
                            <div>Dec 19, 2024</div>
                        </div>

                    </div>
                    <div>
                        <b class="text--size">ĐTCL Macao Open: Những Điều Bạn Cần Biết</b>
                    </div>

                </div>
                <div class="item">
                    <div class="img_right"></div>
                    <div>
                        <div style="display: flex;  margin: 10px 0;">
                            <div class="mac">Tin tức</div>
                            <div>Dec 19, 2024</div>
                        </div>

                    </div>
                    <div>
                        <b class="text--size">ĐTCL Macao Open: Những Điều Bạn Cần Biết</b>
                    </div>

                </div>
                <div class="item">
                    <div class="img_right"></div>
                    <div>
                        <div style="display: flex;  margin: 10px 0;">
                            <div class="mac">Tin tức</div>
                            <div>Dec 19, 2024</div>
                        </div>

                    </div>
                    <div>
                        <b class="text--size">ĐTCL Macao Open: Những Điều Bạn Cần Biết</b>
                    </div>

                </div>
                <div class="item">
                    <div class="img_right"></div>
                    <div>
                        <div style="display: flex;  margin: 10px 0;">
                            <div class="mac">Tin tức</div>
                            <div>Dec 19, 2024</div>
                        </div>

                    </div>
                    <div>
                        <b class="text--size">ĐTCL Macao Open: Những Điều Bạn Cần Biết</b>
                    </div>

                </div>
                <div class="item">
                    <div class="img_right"></div>
                    <div>
                        <div style="display: flex;  margin: 10px 0;">
                            <div class="mac">Tin tức</div>
                            <div>Dec 19, 2024</div>
                        </div>

                    </div>
                    <div>
                        <b class="text--size">ĐTCL Macao Open: Những Điều Bạn Cần Biết</b>
                    </div>

                </div>

            </div>
        </div>
    </form>

</body>

</html>