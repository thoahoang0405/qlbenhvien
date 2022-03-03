<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtMaND'])){
        $maNguoiDung = $_POST['txtMaND'];
    }
    if(isset($_POST['txtHoTen'])){
        $hoTen      = $_POST['txtHoTen'];
    }
    $password       = $_POST['txtpassword'];
    $gioitinh          = $_POST['txtgioitinh'];
    $sdt       = $_POST['txtsdt']; 


    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE letan SET ten ='$hoTen', matkhau = '$password',  gioitinh='$gioitinh',  sdt='$sdt' WHERE maletan = '$maNguoiDung'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: letan.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>