
<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
<?php



include '../../BusinessLogic/bs/dbConfig.php';
$mabn = $_GET['id'];
$query = "SELECT * FROM donthuoc WHERE  mabn ='$mabn'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);

mysqli_close($db);


?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn thuốc bệnh Nhân</title>
    <?php include './template/header.php' ?>
</head>

<body>


<div class="container-fluid ">
    <div class="row loginbs pt-5 ">
       
        <div class="col-md-12 pt-4 pb-5 text-primary text-center">
            <h2> ĐƠN THUỐC, CHỈ SỐ XÉT NGHIỆM CỦA BỆNH NHÂN </h2>
        </div>
    </div>
</div>


<div class="container-fluid  ">
    <div class="row ">
<?php    include '../../BusinessLogic/bs/dbConfig.php';
$mabs = $_SESSION['LoginOK'];
$query = "SELECT * FROM bacsi WHERE  mabs ='$mabs'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);

mysqli_close($db);

$makhoa = $rs['makhoa'];
$tenbs = $rs['tenbs'] ;
$sdt = $rs['sdt'];
$diachi=$rs['diachi'];
?>

        <div class="col-md-12  loginbs">
            <div class="row ">
                <div class=" text-secondary text-start  ms-5">
                    <h3>Xin Chào Bác Sĩ <?php echo $tenbs ?></h3>
                     
                </div>
                <div class=" text-end  ">
                    <div class="row">
                        <span class="col-md-9"></span>
                        <button class="col-md-1  text-center btn-dark"> <a href="./donthuoc.php" class="text-decoration-none text-white"> quay lại</a></button> 
                        
                          
                        <a href="../../BusinessLogic/bs/logout.php" class="text-decoration-none text-start col-md-1">
                        <span class="material-icons  col-md-1 ">
                   logout
                   </span></a>
                </div>
                     
                </div>
                
            </div> 
            <div class="row">
                <h3>Mã Bệnh Nhân: <?php echo $mabn ?></h3>
                <div class=" mt-3 ms-3 btn btn-outline-info col-md-2"> <a href="./themdonthuoc.php?id=<?php echo $mabn; ?>" style="text-decoration: none; font-size: 20px; color: black" >Thêm Đơn Thuốc</a></div>
            </div>
            <div class="row mt-5 me-5 pb-5 pt-5">
                <table class=" ms-3 table table-primary">
                    <thead>
                      <tr>
                        <th scope="col">Mã Đơn Thuốc</th>
                        
                        <th scope="col">Ngày Bắt Đầu</th>
                        <th scope="col">Ngày Kết Thúc</th>
                        <th scope="col">Thông Tin Đơn Thuốc</th>
                        
                       

                      </tr>
                    </thead>
                    <?php     $conn = mysqli_connect('localhost', 'root', '', 'benhvien');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          $mabn = $_GET['id'];
          //b2:thực hiện truy vấn
          $sql = "SELECT * FROM donthuoc where mabn= '$mabn'";
          $result = mysqli_query($conn, $sql);
          //b3:xử lí kq truy vấn
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
                    <tbody>
                      <tr>
                        <th scope="row"><?php echo $row['madonthuoc'] ?></th>
                        <td><?php echo $row['ngaybatdau'] ?></td>
                        <td><?php echo $row['ngayketthuc'] ?></td>
                        <td><?php echo $row['thongtindonthuoc'] ?>  </td>
                           
                          
                      
                        
                      </tr>

                     
                    </tbody>

                    <?php 
            }
        }
                    ?>
                  </table>
                
         </div> 
         <div class=" mt-3 ms-3 btn btn-outline-info col-md-2"> <a href="./themchiso.php?id=<?php echo $mabn; ?>" style="text-decoration: none; font-size: 20px; color: black" >Thêm Chỉ Số</a></div>
         <div class="row mt-5">
                <table class="table table-warning pb-5 mb-5 ">
                    <thead>
                      <tr>
                        <th scope="col">Ngày Xét Nghiệm </th>
                        
                        <th scope="col">Nhịp tim(mm Hg)</th>
                        <th scope="col">Nhóm  Máu</th>
                        <th scope="col">Huyết Áp(mm hg)</th>
                       
                        

                      </tr>
                    </thead>
               <?php     $conn = mysqli_connect('localhost', 'root', '', 'benhvien');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          $mabn = $_GET['id'];
          //b2:thực hiện truy vấn
          $sql = "SELECT * FROM chisoxn where mabn= '$mabn'";
          $result = mysqli_query($conn, $sql);
          //b3:xử lí kq truy vấn
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
                    <tbody>
                      <tr>
                        <th ><?php echo $row['ngayxetnghiem']  ?></th>
                        <td><?php echo  $row['nhiptim'] ?></td>
                        <td><?php echo $row['nhommau'] ?></td>
                        <td><?php echo  $row['huyetap'] ?></td>
                        
                       
                     
                     
                    </tbody>
                    <?php 
            }
        }
                    
                    ?>
                  </table>
                
         </div>             

           
            <!-- -->


        <!-- </div> -->
    </div>
</div>

<?php include './template/footer.php' ?>
