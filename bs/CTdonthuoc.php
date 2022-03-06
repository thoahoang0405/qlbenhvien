
<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
<?php



include 'dbConfig.php';
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
    <div class="row bg-light ">
       
        <div class="col-md-12 pt-4 pb-5 text-primary text-center">
            <h2> ĐƠN THUỐC BỆNH NHÂN </h2>
        </div>
    </div>
</div>


<div class="container-fluid  pb-5">
    <div class="row ">
<?php    include 'dbConfig.php';
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

        <div class="col-md-12">
            <div class="row">
                <div class=" text-secondary text-start mt-5 ms-5">
                    <h3>Xin Chào Bác Sĩ <?php echo $tenbs ?></h3>
                     
                </div>
                <div class=" text-end  ">
                    <div class="row">
                        <span class="col-md-9"></span>
                        <button class="col-md-1  text-center btn-dark"> <a href="./donthuoc.php" class="text-decoration-none text-white"> quay lại</a></button> 
                        
                        <span class="material-icons  col-md-1 text-start">
                   logout
                   </span>
                </div>
                     
                </div>
                
            </div> 
            <div class="row">
                <h3>Mã Bệnh Nhân: <?php echo $mabn ?></h3>
                <div class=" mt-3 ms-3 btn btn-outline-info col-md-2"> <a href="./themdonthuoc.php?id=<?php echo $mabn; ?>" style="text-decoration: none; font-size: 20px; color: black" >Thêm Đơn Thuốc</a></div>
            </div>
            <div class="row mt-5">
                <table class="table table-info">
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

           
            <!-- -->


        <!-- </div> -->
    </div>
</div>

<?php include './template/footer.php' ?>
