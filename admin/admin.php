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
            <h3 class=" text-center  mt-5">DANH SÁCH BÁC SĨ</h3>
            <div>
                <a class="btn btn-primary " href="add_employee.php">Thêm</a>
            </div>
            <table class="table bg-white" >
                <thead> 
                    <tr>
                        <th scope="col">Mã bác sĩ</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Mã khoa</th>
                        <th scope="col">Sdt</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
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
                        $sql = "SELECT mabs, tenbs, makhoa, sdt, matkhau FROM bacsi ";
                        $result = mysqli_query($conn,$sql);
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['mabs']; ?></th>
                                    <td><?php echo $row['tenbs']; ?></td>
                                    <td><?php echo $row['makhoa']; ?></td>
                                    <td><?php echo $row['sdt']; ?></td>
                                    <td><?php echo $row['matkhau']; ?></td>
                                    <td><a href="update_employee.php?mabs=<?php echo $row['mabs']; ?>"><i class="bi bi-pencil-square text-primary "></i></a></td>
                                    <td><a href="delete_employee.php?mabs=<?php echo $row['mabs']; ?>"><i class="bi bi-trash text-primary"></i></a></td>
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