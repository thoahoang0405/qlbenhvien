<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtHoTen'])){
        $hoTen = $_POST['txtHoTen'];
    }
    $id = $_POST['txtid'];
    $hoten = $_POST['txtHoTen'];
    $makhoa = $_POST['txtmakhoa'];
    $sdt = $_POST['txtsdt'];
    $password = $_POST['txtpassword'];
    $diachi = $_POST['txtdiachi'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO bacsi (mabs, tenbs, makhoa, sdt, matkhau, diachi) VALUES ('$id','$hoten','$makhoa', '$sdt', '$password','$diachi')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        echo "Lỗi"; //Chuyển hướng lỗi
    }else{
        header("location: ../../UI/admin/admin.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>