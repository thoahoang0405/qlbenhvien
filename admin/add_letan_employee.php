<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    include("template/header.php");
?>
    <main>
    <div class="container">
        <h3 class="text-center text-primary mt-5">Thêm lễ tân mới</h3>
        <!-- Form thêm Dữ liệu nhân viên -->
        
        <form action="process-add-letan-employee.php" method="post">
            <div class="form-group">
                <label for="txtid">Mã lễ tân</label>
                <input type="text" class="form-control" id="txtid" name="txtid" placeholder="Nhập mã">
               
            </div>
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
                
            </div>
            <div class="form-group">
                <label for="txtpassword">Mật khẩu</label>
                <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Nhập mật khẩu">
               
            </div>
            
            <div class="form-group">
                <label for="txtgioitinh">Giới tính</label>
                <input type="text" class="form-control" id="txtgioitinh" name="txtgioitinh" placeholder="Nhập giới tính">
                
            </div>
            
            <div class="form-group">
                <label for="txtsdt">Số điện thoại</label>
                <input type="text" class="form-control" id="txtsdt" name="txtsdt" placeholder="Nhập số điện thoại">
               
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
               
                </select>
            </div>
            
        </form>
    </div>    
    </main>

<?php
    include("template/footer.php");
?>