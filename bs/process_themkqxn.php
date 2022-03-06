<?php
// Xử lý giá trị GỬI TỚI
if (!isset($_POST['btnluu'])) {
    header("location: themketqua.php" );
   
}
$mabn = $_POST['txtmabn'];
$khoakham = $_POST['txtkhoakham'];
 $kqua = $_POST['txtkq'];
$ngay = $_POST['txtngay'];


// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost', 'root', '', 'benhvien');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn

$sql = "INSERT INTO khambenh (mabn,makhoakham,ketquakham,ngaykham) VALUES ('$mabn','$khoakham','$kqua','$ngay')";
// echo $sql;
$ketqua = mysqli_query($conn, $sql);

if (!$ketqua) {
    header("location: error.php"); //Chuyển hướng lỗi
} else {
    header("location: kqxn.php"); //Chuyển hướng lại Trang Quản trị
}

// Bước 03: Đóng kết nối
mysqli_close($conn);



?>