<?php
    if(!empty($_POST['masinhvien']) &&
        !empty($_POST['tensinhvien']) &&
        
        !empty($_POST['ngaysinh']) &&
        !empty($_POST['diachi']) &&
        !empty($_POST['sodienthoai']) &&
        !empty($_POST['tendangnhap']) &&
        !empty($_POST['matkhau']) 
    ){
        #Start xử lý ảnh
        // Xử lý ảnh
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

         // Kiểm tra xem file ảnh có hợp lệ không
         if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
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
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
            $uploadOk = 0;
        }

        // Kiểm tra nếu $uploadOk = 0 thì không upload được
        if ($uploadOk == 0) {
            echo "File của bạn chưa được tải lên";
        // Nếu mọi thứ đều ổn, thử upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "File ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " đã được cập nhật";
            
                $image_path = $target_file;

                include('connect.php');
                $maSinhVien =  $_POST['masinhvien'];
                $tenSinhVien =  $_POST['tensinhvien'];
                $gioiTinh = $_POST['gioitinh'];
                $ngaySinh = $_POST['ngaysinh'];
                $diaChi = $_POST['diachi'];
                $soDienThoai = $_POST['sodienthoai'];
                $tenDangNhap = $_POST['tendangnhap'];
                $matKhau = $_POST['matkhau'];
        
                $sql="INSERT INTO `sinh_vien`(`ma_sv`, `tensv`, `gioi_tinh`, `ngay_sinh`, `dia_chi`, `sdt`, `ma_lop`, `ma_khoa`, `username`, `password`, `image_path`) VALUES ('$maSinhVien','$tenSinhVien','$gioiTinh','$ngaySinh','$diaChi','$soDienThoai',1,1,'$tenDangNhap','$matKhau', '$image_path')";
                echo $sql;
                mysqli_query($conn, $sql);
                // Nếu hợp lệ, chuyển hướng sang trang chủ
                header("Location: trangchu.php?page_layout=thongtinsinhvien");
         
            }
        }
        #End xử lý ảnh
        }
    else{
        echo "Vui lòng nhập đầy đủ thông tin";
    }
?>