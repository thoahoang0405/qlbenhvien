<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_nguoidung = $_GET['maletan'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM letan WHERE maletan = '$ma_nguoidung'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }
    
    // Bước 04: Đóng kết nối
    mysqli_close($conn);

?>
<?php
    include("template/header.php");
?>
    <main>
    <div class="container">
        <h3 class="text-center text-primary mt-5">Cập nhật thông tin lễ tân </h3>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-update-letan-employee.php" method="post">
            <div class="form-group">
                <label for="txtMaND">Mã lễ tân</label>
                <input type="text" class="form-control" readonly id="txtMaND" name="txtMaND" placeholder="Mã lễ tân" value="<?php echo $row['maletan']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên" value="<?php echo $row['ten']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtpassword">Mật khẩu</label>
                <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Nhập mật khẩu" value="<?php echo $row['matkhau']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtgioitinh">Giới tính</label>
                <input type="text" class="form-control" readonly id="txtgioitinh" name="txtgioitinh" placeholder="Giới tính" value="<?php echo $row['gioitinh']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
                   
            <div class="form-group">
                <label for="txtsdt">Số điện thoại</label>
                <input type="text" class="form-control" id="txtsdt" name="txtsdt" placeholder="Nhập số điện thoại" value="<?php echo $row['sdt']; ?>">
               
            </div>
           
            
            
               
                </select>
                <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>    
            </div>
            
        </form>
    </div>    
    </main>
<?php
    include("template/footer.php");
?>