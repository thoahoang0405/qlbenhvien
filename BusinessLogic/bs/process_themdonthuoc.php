<?php
// Xử lý giá trị GỬI TỚI
if (!isset($_POST['btnluu'])) {
    header("location:../../UI/bs/themdonthuoc.php" );
   
}
$mabn = $_POST['txtmabn'];
$MDT = $_POST['txtMDT'];
 $NBD = $_POST['txtNBD'];
$NKT = $_POST['txtNKT'];
$TTT = $_POST['txtTTT'];

// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost', 'root', '', 'benhvien');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn

$sql = "INSERT INTO donthuoc (mabn,madonthuoc,ngaybatdau,ngayketthuc,thongtindonthuoc) VALUES ('$mabn','$MDT','$NBD','$NKT','$TTT')";
// echo $sql;
$ketqua = mysqli_query($conn, $sql);

if ($ketqua) {
    header("location: ../../UI/bs/success.php"); //Chuyển hướng lại Trang Quản trị
} else {
   header("location: ../../UI/bs/error.php"); //Chuyển hướng lỗi 
}

// Bước 03: Đóng kết nối
mysqli_close($conn);



?>