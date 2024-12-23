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
    <?php $id = $_GET['id']; ?>
    <form action="xu_li_sua_bai_viet.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <div class="content_bai_viet">
            <div class="list_icon">
                <i style="display: block;" class="fa-brands fa-reddit"></i>
                <i style="display: block;" class="fa-brands fa-x-twitter"></i>
                <i style="display: block;" class="fa-brands fa-facebook"></i>

            </div>
            <?php
            include('connect.php');


            $sql = "select * from article where `id` = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            ?>

            <div class="left_content">
                <div class="mac mac--absolut">Tin tức</div>
                <h1>Hãy nhập tiêu đề của bạn</h1>
                <input style="margin-bottom:10px; font-size:32px; margin: bottom 10px;" type="text" name="title" value="<?php echo $row['title'] ?>">
                <h2>Nhập thêm mô tả cho bài viết của bạn</h2>
                <input style="margin-bottom:10px; font-size:20px;" type="text" name="descri" value="<?php echo $row['descri'] ?>">
                <div class="date">
                    <?php

                    $ngay_hien_tai = date("M d, Y");
                    echo $ngay_hien_tai;
                    ?>
                </div>

                <div class="img_1">
                    <img style="width: 100%; height:100%;"
                        src=" <?php
                                if (!empty($row['image_link'])) {
                                    echo $row['image_link'];
                                } else {
                                    echo $row['image_path'];
                                }
                                ?>"
                        alt="img">
                </div>
                <div style="margin-bottom:10px">
                    <p>Thêm ảnh</p>
                    <input type="file" name="fileToUpload" id="fileToUpload">

                </div>
                <div>
                    <p>Hoặc thả đường dẫn ở đây</p>
                    <input type="text" name="image_link">
                </div>


                <h2>Nội dung bài viết</h2>
                <div>
                    <textarea style="height: 400px; width:100% ; resize: none;" name="content"><?php echo $row['content'] ?></textarea>
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