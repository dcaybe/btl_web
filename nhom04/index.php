<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // code php để ở đây

        //1. Cú pháp hiện thị lên màn hình
        echo "Hello World!" . "<br>";

        // 2. Biến
        $ten = "Ngô Ngọc Anh";
        $tuoi = 28;

        echo $ten . " " . $tuoi . "<br>";
        //3. Hằng
        define("soPi", 3.14);
        echo soPi . "<br>";

        // 4.Phân biệt '' và ""
        echo "$ten" . "<br>";
        echo '$ten' . "<br>";

        // 5. Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        #Phép cộng +
        #Trừ -
        #Nhân *
        #Chia /
        echo $soThuNhat / $soThuHai . "<br>";
        #Toán tử gán
        # += -= *= /= %=
        // echo $soThuNhat %= 2;
        #Toán tử tăng giảm ++ --
        // echo --$soThuNhat;
        # so sánh == !== > < >= <= ===
        # && ||

        //6. if else
        $tong = $soThuNhat + $soThuHai;
        if($tong > 15){
            echo "Tổng là " . $tong . " lớn hơn 15";
        }
        elseif($tong == 15){
            echo "Tổng là " . $tong;
        }
        else{
            echo "Tổng là " . $tong . " nhỏ hơn 15";
        }

        // 7. Chuỗi
        $hoTen = "Ngo Ngoc Anh";
        echo "<br>";
        echo strlen($hoTen) . "<br>";
        #Đếm số từ trong chuỗi
        echo str_word_count($hoTen) . "<br>";
        #Tìm kiếm kí tự trong chuỗi
        echo strpos($hoTen, "A");
        #Thay thế kí tự trong chuỗi
        echo str_replace("Ngo ", "Nguyen ",$hoTen);
        echo "<br>";
        //9. Switch case
        $color = "red";
        switch($color){
            case "red":
                echo "is red";
                break;
            case "black":
                echo "is black";
                break;
            default:
                echo "no color";
                break;
        }

        //10. For
        for ($i=0; $i <= 10; $i++) { 
           echo $i . "<br>";
        }

        //11. Do While
        echo "<br>";
        #while
        $bienWhile = 1;

        while($bienWhile <= 10){
            echo $bienWhile;
            $bienWhile++;
        }
        echo "<br>";
        #Do While
        $i = 1;
        do{
            echo $i;
            $i++;
        }
        while($i < 10);
        echo "<br>";
        //12. foreach
        $so = [1,2,3,4,5];
        
        foreach ($so as $value) {
            echo $value;
            echo "<br>";
        }
        echo "<br>";
        //14. Mảng
        $ten = ["Anh","Dung","Kien"];

        # Dem so phan tu trong mang count
        echo count($ten);
        echo "<br>";
        for ($i=0; $i < count($ten); $i++) { 
            echo $ten[$i] . "<br>";
        }
        echo $ten[1];
        ##Hien thi arr
        print_r($ten);
        echo "<br>";
        $ten[] = "Duc";
        echo "<br>";
        print_r($ten);
        ##Sửa 1 phan tu
        echo "<br>";
        $ten[1] = "Phong";
        print_r($ten);
        ##Xoá phần tử
        unset($ten[1]);
        print_r($ten);

        ##sap xep arr
        ###Thứ tự tăng dần
        echo "<br>";
        $mang = ["C","B","D","A"];  
        print_r($mang);
        echo "<br>";
        sort($mang);
        print_r($mang);
        ##Săp xếp giảm
        echo "<br>";
        rsort($mang);
        print_r($mang);

        $a;
        if(isset($a)){
            echo "bien nay co ton tai";
        }
        else{
            echo "bien khong ton tai";
        }

        //16. Function
        function ham(){
            echo "Function Hello World!";
        }

        ham(); #gọi ham

        function myName($ten){
            echo "Xin chào " . $ten; 
        }
        myName("Ngoc Anh");

        // 17. Biến toàn cục

        $soA = 5;
        $soB = 10;

        function phepCong(){
            $GLOBALS['ketQua'] = $GLOBALS['soA'] + $GLOBALS['soB'];
        }

        phepCong();
        echo $ketQua;

        //18. gộp file
        // include nếu lỗi vẫn chạy 
        // require nếu lỗi 1 file dừng toàn bộ
        include('trangchu.php');
        require('trangchu.php');
    ?>
</body>
</html>