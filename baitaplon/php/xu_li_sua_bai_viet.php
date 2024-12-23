<?php
if (
    !empty($_POST['image_path'])


) {
    #Start xử lý ảnh
    // Xử lý ảnh
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Kiểm tra xem file ảnh có hợp lệ không
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File này không phải là ảnh!";
            $uploadOk = 0;
        }
    }

    // Kiểm tra nếu file đã tồn tại
    if (file_exists($target_file)) {
        echo "File này đã tồn tại trên hệ thông";
        $uploadOk = 0;
    }

    // Kiểm tra kích thước file
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "File quá lớn";
        $uploadOk = 0;
    }

    // Cho phép các định dạng file ảnh nhất định
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
        $uploadOk = 0;
    }

    // Kiểm tra nếu $uploadOk = 0 thì không upload được
    if ($uploadOk == 0) {
        echo "File của bạn chưa được tải lên";
        // Nếu mọi thứ đều ổn, thử upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã được cập nhật";
            $image_path = $target_file;
        }
    }
    #End xử lý ảnh
} else $image_path = '';


include('connect.php');
$id = $_GET['id'];
$title = $_POST['title'];
$image_link = $_POST['image_link'];
$content = $_POST['content'];
$descri = $_POST['descri'];
$date = date("d/m/Y");

// Insert dữ liệu vào cơ sở dữ liệu


$sql = "UPDATE `article` SET `title`='$title',`descri`='$descri',`content`='$content',`image_path`='$image_path',`image_link`='$image_link' WHERE `id` = $id ";

echo $sql;
mysqli_query($conn, $sql);
// Nếu hợp lệ, chuyển hướng sang trang chủ
header("Location: trangchu_login.php?page_layout=tin_tuc");
