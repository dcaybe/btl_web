<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .add {
            background-color: green;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Thêm thông tin sinh viên</h1>
    <form action="them.php" method="post" enctype="multipart/form-data">
        <div>
            <p>Tên</p>
            <input type="text" name="ten" placeholder="Tên sinh viên">
        </div>
        <div>
            <p>Biển</p>
            <input type="text" name="bien" placeholder="Biển xe">

        </div>
        <div>
            <input class="add" type="submit" value="Thêm">
        </div>
    </form>

    <?php

    if (
        !empty($_POST['bien']) &&
        !empty($_POST['ten'])
    ) {


        include('connect.php');
        $bien = $_POST['bien'];
        $ten = $_POST['ten'];

        $sql = "INSERT INTO `xe`(`bien`, `ten`)
            VALUES ('$bien','$ten')";


        if (mysqli_query($conn, $sql)) {
            // Nếu hợp lệ, chuyển hướng sang trang chủ
            header("Location: index.php?page_layout=xem");
        } else {
            echo "Có lỗi trong quá trình lưu dữ liệu.";
        }
    } else echo ('Hãy nhập đầy đủ thông tin');
    ?>
</body>

</html>