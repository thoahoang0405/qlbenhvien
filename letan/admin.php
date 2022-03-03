<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    
    require "template/header.php";
?>
    <main >
        <div class="container_admin container ">
            <h3 class=" text-center  mt-5">DANH SÁCH BỆNH NHÂN</h3>
            <div>
                <a class="btn btn-primary " href="add_employee.php">Thêm</a>
            </div>
            <table class="table bg-white" >
                <thead> 
                    <tr>
                    <th scope="col">Mã bệnh nhân</th>
                        <th scope="col">Mật Khẩu</th>
                        <th scope="col">Tên bệnh nhân</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Ngày Sinh</th>
                        <th scope="col">Đối tượng</th>
                        <th scope="col">Số thẻ bảo hiểm y tế</th>
                        <th scope="col">Thời hạn thẻ</th>
                        <th scope="col">Tên người nhà</th>
                        <th scope="col">Sdt người nhà</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Bác Sĩ phụ trách</th>
                        <th scope="col">Ngày Nhập Viện</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                    <?php
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','benhvien');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT mabn,	matkhau,	tenbn,	gioitinh,	ngaysinh,	doituong,	sothebhyt,	thoihanthe,	tennguoinha,	stdnguoinha,	trangthai,	bacsiphutrach,	ngaynhapvien FROM benhnhan ";
                        $result = mysqli_query($conn,$sql);
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                <th scope="row"><?php echo $row['mabn']; ?></th>
                                    <td><?php echo $row['matkhau']; ?></td>
                                    <td><?php echo $row['tenbn']; ?></td>
                                    <td><?php echo $row['gioitinh']; ?></td>
                                    <td><?php echo $row['ngaysinh']; ?></td>
                                    <td><?php echo $row['doituong']; ?></td>
                                    <td><?php echo $row['sothebhyt']; ?></td>
                                    <td><?php echo $row['thoihanthe']; ?></td>
                                    <td><?php echo $row['tennguoinha']; ?></td>
                                    <td><?php echo $row['stdnguoinha']; ?></td>
                                    <td><?php echo $row['trangthai']; ?></td>
                                    <td><?php echo $row['bacsiphutrach']; ?></td>
                                    <td><?php echo $row['ngaynhapvien']; ?></td>
                                    
                                </tr>
                    <?php
                            }
                        }
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                    ?>
                    
                    
                </tbody>
                </table>
        </div>    
    </main>

<?php
    include("template/footer.php");
?>