<?php
// Xử lý giá trị GỬI TỚI
if (!isset($_POST['btnluu'])) {
    header("location: themchiso.php" );
   
}
$mabn = $_POST['txtmabn'];
$HA = $_POST['txtHA'];
 $NT = $_POST['txtNT'];

$NM = $_POST['txtNM'];

// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost', 'root', '', 'benhvien');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn

$sql = "INSERT INTO chisoxn (mabn,huyetap,nhiptim,nhommau) VALUES ('$mabn','$HA','$NT','$NM')";
// echo $sql;
$ketqua = mysqli_query($conn, $sql);

if (!$ketqua) {
    header("location: error.php"); //Chuyển hướng lỗi
} else {

    header("location: success.php");
}

// Bước 03: Đóng kết nối
mysqli_close($conn);



?>