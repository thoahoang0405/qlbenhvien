<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['luulai'])){
        $hoTen = $_POST['txtHoTen'];

    
    $id = $_POST['txtid'];
    $password = $_POST['txtMatKhau'];
    $hoten = $_POST['txtHoTen'];
    $gioitinh = $_POST['txtGioiTinh'];
    $ngaysinh =$_POST['txtNgaySinh'];
    $doituong =$_POST['txtDoiTuong'];
    $Stbhyt =$_POST['txtStbhyt'];
    $Thoihanthe =$_POST['txtThoiHanThe'];
    $TenNguoiNha =$_POST['txtTenNguoiNha'];
    $SDTnguoinha =$_POST['txtSDTnguoinha'];
    $TrangThai =$_POST['txtTrangThai'];
    $BacSiPhuTrach =$_POST['txtBacSiPhuTrach'];
    $NgayNhapVien =$_POST['txtNgayNhapVien'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO benhnhan(mabn,matkhau,tenbn,gioitinh,ngaysinh,doituong,sothebhyt,thoihanthe,tennguoinha,stdnguoinha,trangthai,bacsiphutrach,ngaynhapvien)
     VALUES ('$id','$password','$hoten','$gioitinh', '$ngaysinh', '$doituong','$Stbhyt','$Thoihanthe','$TenNguoiNha','$SDTnguoinha','$TrangThai','$BacSiPhuTrach','$NgayNhapVien')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        echo "Lỗi"; //Chuyển hướng lỗi
    }else{
        header("location: admin.php"); //Chuyển hướng lại Trang Quản trị
    }
    }
    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>