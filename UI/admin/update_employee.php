<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginAdmin'])){
        header("location:index.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_nguoidung = $_GET['mabs'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM bacsi WHERE mabs = '$ma_nguoidung'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }
    
    // Bước 04: Đóng kết nối
    mysqli_close($conn);

?>
<?php
    include("header.php");
?>
    <main>
    <div class="container">
        <h3 class="text-center text-primary mt-5">Cập nhật thông tin bác sĩ </h3>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="../../BusinessLogic/admin/process-update-employee.php" method="post">
            <div class="form-group">
                <label for="txtMaND">Mã bác sĩ</label>
                <input type="text" class="form-control" readonly id="txtMaND" name="txtMaND" placeholder="Mã bác sĩ" value="<?php echo $row['mabs']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên" value="<?php echo $row['tenbs']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtMakhoa">Mã khoa</label>
                <input type="text" class="form-control" readonly id="txtMakhoa" name="txtMakhoa" placeholder="Mã khoa" value="<?php echo $row['makhoa']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
                   
            <div class="form-group">
                <label for="txtsdt">Số điện thoại</label>
                <input type="text" class="form-control" id="txtsdt" name="txtsdt" placeholder="Nhập số điện thoại" value="<?php echo $row['sdt']; ?>">
               
            </div>
           
            
            <div class="form-group">
                <label for="txtpassword">Mật khẩu</label>
                <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Nhập mật khẩu" value="<?php echo $row['matkhau']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtdiachi">Địa chỉ</label>
                <input type="text" class="form-control" id="txtdiachi" name="txtdiachi" placeholder="Nhập địa chỉ" value="<?php echo $row['diachi']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>  
                </select>
                <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>    
            </div>
            
        </form>
    </div>    
    </main>
<?php
    include("footer.php");
?>