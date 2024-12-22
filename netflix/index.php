<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       // code php
       //1. cú pháp hiển thị lên màn hình
       echo " Hello World!" . "<br>";
       //Biến
       $ten = "Vũ Thành Công";
       $tuoi = 20;
       echo $ten . " " . $tuoi . "<br>";
       // Hằng
       define("soPi", "3,14");
       echo soPi . "<br>";
       //4.phân biệt ''và""
       echo "$ten" . "<br>";
       echo'$ten' . "<br>";
       //5.Toán tử
       $soThuNhat = 10;
       $soThuHai = 5;
       #phép cộng
       echo $soThuNhat + $soThuHai . "<br>";
       #phép trừ
       echo $soThuNhat - $soThuHai . "<br>";
       #phép nhân
       echo $soThuNhat * $soThuHai . "<br>";
       #phép chia
       echo $soThuNhat / $soThuHai . "<br>";
       #Toán tử gán
       # +=
       echo $soThuNhat += 1 , "<br>";
       # -=
       echo $soThuNhat -= 1 , "<br>";
       #Toán tử tăng giảm
       echo ++$soThuNhat;
       #so sánh == !== > < >= <= ===
       # && ||
       //6. if else
       $tong = $soThuNhat + $soThuHai;
       if($tong > 10){
         echo "Tổng là" . $tong. "Lớn hơn 15";
       }
       elseif($tong == 15){
         echo"Tổng là" . $tong;
       }
       else{
         echo"Tổng là" . $tong. "nhỏ hơn 15";
       }
       //7. Chuỗi
       $hoTen = "Vu Thanh Cong";
       echo "<br>";
       echo strlen($hoTen) . "<br>";
       #đém số từ trong chuỗi
       echo str_word_count($hoTen) . "<br>";
       #tìm kiếm ký tự trong chuỗi
       echo strpos($hoTen, "C") . "<br>";
       #Thay thế kí tự chuỗi
       echo str_replace("Vu","Tran",$hoTen);
       echo "<br>";
       //8.Switch case
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
       //9.for
       for ($i=0; $i<=10; $i++)
       {
        echo $i."<br>";
       }
       echo "<br>";
       //10.do while
       echo "<br>";
       #WHILE
       $bienwhile = 1;
       while ($bienwhile <=10)
       {
        echo $bienwhile;
        $bienwhile++;
       }
       echo "<br>";
       #Do while
       $i = 1;
       do{
        echo $i;
        $i++;
       }
       while($i < 10);
       echo "<br>";
       //12.foreach
       $so = [1,2,3,4,5];
       foreach ($so as $value){
        echo $value;
        echo "<br>";
       }
      
       //13. mảng
       $ten = ["Anh","Dung","Kiên"];
       #dem so phần tử trong mảng
       echo count($ten);
       for ($i=0; $i < count($ten); $i++) {
        echo $ten[$i] . "<br>";
       }
       echo $ten[1];
       #hien thi arr
       print_r($ten);
       echo "<br>";
       $ten[] = "Duc";
       echo "<br>";
       print_r($ten);
       #Sua 1 phan tu
       echo "<br>";
       $ten[1] = "Phong";
       print_r($ten);
       #xóa phần tử trong mảng
       echo "<br>";
       unset($ten[1]);
       print_r($ten);
       # sắp xếp arr
       ## theo thứ tự tăng dần
       echo "<br>";
       $mang = ["C","B","D","A"];
       print_r($mang);
       echo "<br>";
       sort($mang);
       print_r($mang);
       ## theo thứ tự giảm dần
       echo "<br>";
       rsort($mang);
       print_r($mang);
       echo "<br>";
       $a = 10;
       if(isset($b)){
        echo "bien nay co ton tai";
       }
       else{
        echo "bien nay khong ton tai";
       }
       //14. Function
       echo "<br>";
       function ham(){
        echo "Function Hello World";
       }
       ham(); #gọi hàm
       echo "<br>";
       Function myName($ten){
        echo "Xin chao".$ten;
       }
       myName("Công");
       //15. Biến toàn cục
       echo "<br>";
       $soA = 5;
       $soB = 10;
       function phepcong(){
        $GLOBALS['ketqua'] = $GLOBALS['soA'] + $GLOBALS['soB'];
       }
       phepcong();
       echo $ketqua;
       //16. gộp file
       echo "<br>";
       //include nếu lỗi vẫn chạy
       include('trangchu.php');
       //require nếu lỗi 1 file dừng toàn bộ
       require('trangchu.php');
    ?>
</body>
</html>