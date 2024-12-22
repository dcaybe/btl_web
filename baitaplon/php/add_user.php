<?php
if (
    !empty($_POST['password']) &&
    !empty($_POST['username']) &&
    !empty($_POST['email'])

) {
    # Start xử lý ảnh
    // Kiểm tra nếu file được upload
    // if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Kiểm tra xem file ảnh có hợp lệ không
    //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //     if ($check !== false) {
    //         // echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }

    //     // Kiểm tra nếu file đã tồn tại
    //     if (file_exists($target_file)) {
    //         echo "File này đã tồn tại trên hệ thống.";
    //         $uploadOk = 0;
    //     }

    //     // Kiểm tra kích thước file (giới hạn 500KB)
    //     if ($_FILES["fileToUpload"]["size"] > 500000) {
    //         echo "File quá lớn.";
    //         $uploadOk = 0;
    //     }

    //     // Cho phép các định dạng file ảnh nhất định
    //     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    //         echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
    //         $uploadOk = 0;
    //     }

    //     // Kiểm tra nếu $uploadOk = 0 thì không upload được
    //     if ($uploadOk == 0) {
    //         echo "File của bạn chưa được tải lên.";
    //     } else {
    //         // Nếu mọi thứ đều ổn, thử upload file
    //         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //             echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " đã được cập nhật.";

    //             $image_path = $target_file;
    //         } else {
    //             echo "Có lỗi khi tải file lên.";
    //             $image_path = 'co loi khi tai len'; // Set image path as empty if file upload fails
    //         }
    //     }
    // } else {
    //     $image_path = 'khong the tai len'; // No file uploaded, handle accordingly
    // }

    # Xử lý thông tin sinh viên
    include('connect.php');
    $Username = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    // Insert dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO `user`(`user_name`, `email`, `password`)
            VALUES ('$Username','$Email','$Password')";
}
// echo $sql; // Uncomment this to debug SQL query
if (mysqli_query($conn, $sql)) {
    // Nếu hợp lệ, chuyển hướng sang trang chủ
    header("Location: trangchu.php?page_layout=home");
} else {
    echo "Có lỗi trong quá trình lưu dữ liệu.";
}
// } else {
//     echo "Vui lòng nhập đầy đủ thông tin.";
// }
// echo '<pre>';
// print_r($_FILES);
// echo $image_path;
// echo '</pre>';
