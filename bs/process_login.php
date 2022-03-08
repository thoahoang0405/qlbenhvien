<?php
   
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnĐN'])){
        $tendn = $_POST['txtTen'];
        $pass  = $_POST['txtMK'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','benhvien');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
       
        $sql = "SELECT * FROM bacsi WHERE mabs = '$tendn' AND matkhau='$pass'";
      

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
           
            $_SESSION['LoginOK'] = $tendn;
            header("location: index.php");
        }else{
            $error = "Bạn nhập thông tin chưa chính xác";
            header("location: loginbs.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:loginbs.php");
    }
?>