<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/trangchu.css">
    <link rel="stylesheet" href="../assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="..\JS\home.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <div class="header">
        <div class="left_nav"><button class="riot_btn"><img class="riot_game_icon"
                    src="..\assets\img\002_RG_2021_FULL_LOCKUP_OFFWHITE.png">
                <i class="fa-solid fa-caret-down"></i></button></div>
        <div class="left_nav">
            <div class="riot_btn"><a href="trangchu.php?page_layout=home"><img class="riot_game_icon_1"
                        src="..\assets\img\001.2_RG_2021_LOGOMARK_BLACK_OFFWHITE_CONTAINER.png"></a></div>
        </div>

        <ul class="nav">

            <li></li>
            <li><a href="">
                    CHÚNG TÔI LÀ AI
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul class="subnav">
                    <div class="under_line"></div>
                    <li><a href="trangchu.php?page_layout=thong_tin_ve_riot">Thông tin về riot</a></li>
                    <li><a href="trangchu.php?page_layout=da_dang_hoa_nhap">Đa dạng và hòa nhập</a></li>
                    <li><a href="trangchu.php?page_layout=tac_dong_xa_hoi">Tác động xã hội </a></li>

                </ul>
            </li>
            <li><a href="">
                    LÀM VIỆC CÙNG CHÚNG TÔI
                    <i class="fa-solid fa-caret-down"></i>
                </a>
                <ul class="subnav">
                    <div class="under_line"></div>
                    <li><a href="">Việc làm</a> </li>
                    <li><a href="">Văn phòng</a></li>
                    <li><a href="">Cuộc sống ở riot</a></li>
                </ul>
            </li>
            <li><a href="trangchu.php?page_layout=tin_tuc">TIN TỨC</a> </li>
        </ul>
        <div class="right_nav">
            <ul class="right_nav_main">
                <li><i class="language ti-world"></i></li>
                <li class="search_btn">
                    <div class="search_container"> <input class="input_search" type="text" placeholder="Kết quả"
                            size="12">
                        <i class="search ti-search">
                        </i>
                    </div>
                </li>
                <li><a href="dang_nhap.php">ĐĂNG NHẬP</a></li>
            </ul>
        </div>
    </div>



</body>
<?php
if (isset($_GET['page_layout'])) {
    switch ($_GET['page_layout']) {
        case 'dang_nhap':
            include('dang_nhap.php');
            break;
        case 'thong_tin_ve_riot':
            include('thong_tin_ve_riot.php');
            break;
        case 'home':
            include('home.php');
            break;
        case 'da_dang_hoa_nhap':
            include('da_dang_hoa_nhap.php');
            break;
        case 'tac_dong_xa_hoi':
            include('tac_dong_xa_hoi.php');
            break;
        case 'xulyxoathongtinsinhvien':
            include('xulyxoathongtinsinhvien.php');
            break;
        case 'tin_tuc':
            include('tin_tuc.php');
            break;
    }
}
?>

</html>