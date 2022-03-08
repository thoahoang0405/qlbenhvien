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
        <h3 class="text-center text-primary mt-5">Thêm bệnh nhân mới</h3>
        <!-- Form thêm Dữ liệu nhân viên -->
        
        <form action="process-add-employee.php" method="post">
        <div class="form-group">
                <label for="txtid">Mã bệnh nhân</label>
                <input type="text" class="form-control" id="txtid" name="txtid" placeholder="Nhập mã">
               
            </div>
            <div class="form-group">
                <label for="txtMatKhau">Mật khẩu</label>
                <input type="password" class="form-control" id="txtMatKhau" name="txtMatKhau" placeholder="Nhập Mật Khẩu">
                
            </div>
            
           
            <div class="form-group">
                <label for="txtHoTen">Tên Bệnh Nhân</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Tên Bệnh Nhân">
               
            </div>
            <div class="form-group">
                <label for="txtGioiTinh">Giới Tính</label>
                <input type="text" class="form-control" id="txtGioiTinh" name="txtGioiTinh" placeholder="Giới Tính">
               
            </div>
            <div class="form-group">
                <label for="txtNgaySinh">Ngày Sinh</label>
                <input type="date" class="form-control" id="txtNgaySinh" name="txtNgaySinh" placeholder="Ngày Sinh">
               
            </div>
            <div class="form-group">
                <label for="txtDoiTuong">Đối tượng</label>
                <input type="text" class="form-control" id="txtDoiTuong" name="txtDoiTuong" placeholder="Đối tượng">
               
            </div>
            <div class="form-group">
                <label for="txtStbhyt">Số thẻ bảo hiểm y tế</label>
                <input type="text" class="form-control" id="txtStbhyt" name="txtStbhyt" placeholder="Số thẻ bảo hiểm y tế">
               
            </div>
            <div class="form-group">
                <label for="txtThoiHanThe">Thời hạn thẻ</label>
                <input type="date" class="form-control" id="txtThoiHanThe" name="txtThoiHanThe" placeholder="Thời hạn thẻ">
               
            </div>
            <div class="form-group">
                <label for="txtTenNguoiNha">Tên người nhà</label>
                <input type="text" class="form-control" id="txtTenNguoiNha" name="txtTenNguoiNha" placeholder="Tên người nhà">
               
            </div>
            <div class="form-group">
                <label for="txtSDTnguoinha">SDT người nhà</label>
                <input type="text" class="form-control" id="txtSDTnguoinha" name="txtSDTnguoinha" placeholder="SDT người nhà">
               
            </div>
            <div class="form-group">
                <label for="txtTrangThai">Trạng thái</label>
                <input type="text" class="form-control" id="txtTrangThai" name="txtTrangThai" placeholder="Trạng thái">
               
            </div>
            <div class="form-group">
                <label for="txtBacSiPhuTrach">Bác sĩ phụ trách</label>
                <input type="text" class="form-control" id="txtBacSiPhuTrach" name="txtBacSiPhuTrach" placeholder="Bác sĩ phụ trách">
               
            </div>
            <div class="form-group">
                <label for="txtNgayNhapVien">Ngày nhập viện</label>
                <input type="date" class="form-control" id="txtNgayNhapVien" name="txtNgayNhapVien" placeholder="Ngày Nhập viện">
               
            </div>
            <div class="form-group">
                <label for="txtlydovaovien">Lý do vào viện</label>
                <input type="text" class="form-control" id="txtlydovaovien" name="txtlydovaovien" placeholder="Ngày Nhập viện">
               
            </div>
            <div class="form-group">
                <label for="txtngaykhaibao">Ngày khai báo</label>
                <input type="date" class="form-control" id="txtngaykhaibao" name="txtngaykhaibao" placeholder="Ngày Khai báo">
               
            </div>
            <div class="form-group">
                <label for="txtqtbl">Quá trình bệnh lý</label>
                <input type="text" class="form-control" id="txtqtbl" name="txtqtbl" placeholder="Quá trình bệnh lý">
               
            </div>
            <div class="form-group">
                <label for="txttieusu">Tiểu sử</label>
                <input type="text" class="form-control" id="txttieusu" name="txttieusu" placeholder="Ngày Nhập viện">
               
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="luulai">Lưu lại</button>
               
                </select>
            </div>
            
        </form>
    </div>    
    </main>

<?php
    include("template/footer.php");
?>