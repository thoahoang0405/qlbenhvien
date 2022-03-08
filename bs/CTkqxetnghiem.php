<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
<?php



include 'dbConfig.php';
$mabn = $_GET['id'];
$query = "SELECT * FROM khambenh WHERE  mabn ='$mabn'";
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
    <title>Kết Quả Xét Nghiệm</title>
    <?php include './template/header.php' ?>
</head>

<body>

<div class="container-fluid ">
    <div class="row bg-light ">
       
        <div class="col-md-12 pt-4 pb-5 text-primary text-center">
            <h2>KẾT QUẢ KHÁM BỆNH </h2>
        </div>
    </div>
</div>

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
<div class="container-fluid  pb-5">
    <div class="row ">
        
        <div class="col-md-12">
            <div class="row">
                <div class=" text-secondary text-start mt-5 ms-5">
                <h3>Xin Chào Bác Sĩ <?php echo $tenbs ?></h3>
                     
                </div>
                <div class=" text-end  ">
                    <div class="row">
                        <span class="col-md-9"></span>
                        <button class="col-md-1  text-center btn-dark"> <a href="./kqxn.php" class="text-decoration-none text-white"> quay lại</a></button> 
                        
                        <a href="logout.php" class="text-decoration-none text-start col-md-1">
                        <span class="material-icons  col-md-1 ">
                   logout
                   </span></a>
                </div>
                     
                </div>
                
            </div> 
            <div class="row">
            <h3>Mã Bệnh Nhân: <?php echo $mabn ?></h3>
                <div class=" mt-3 ms-3 btn btn-outline-info col-md-2"> <a href="./themketqua.php?id=<?php echo $mabn ?>" style="text-decoration: none; font-size: 20px; color: black" >Thêm Kết Quả</a></div>
            </div>
            <div class="row mt-5 ms-5 me-5">
                <table class="table table-info ">
                    <thead>
                      <tr>
                        <th scope="col"> Mã Khoa Khám</th>
                        
                        <th scope="col">Kết Quả Khám Bệnh</th>
                        
                        <th scope="col">Ngày Khám Bệnh</th>
                       
                       

                      </tr>
                    </thead>

                    <?php     $conn = mysqli_connect('localhost', 'root', '', 'benhvien');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          $mabn = $_GET['id'];
          //b2:thực hiện truy vấn
          $sql = "SELECT * FROM khambenh where mabn= '$mabn'";
          $result = mysqli_query($conn, $sql);
          //b3:xử lí kq truy vấn
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
                    <tbody>
                      <tr>
                      
                        <td><?php echo $row['makhoakham'] ?></td>
                        <td><?php echo $row['ketquakham'] ?></td>
                        <td><?php echo $row['ngaykham'] ?></td>
                        
                       
                       
                    </tbody>

                    <?php 
            }
        }
                    ?>
                  </table>
                
         </div>       
         <div class=" mt-3 ms-3 btn btn-outline-info col-md-2"> <a href="./themdieutri.php?id=<?php echo $mabn ?>" style="text-decoration: none; font-size: 20px; color: black" >Thêm Điều Trị</a></div>
         <div class="row mt-5 ms-5 me-5">
             <div class= "col-md-3"> </div>
             
                <table class="table table-success col-md-6">
                    <thead>
                      <tr>
                        <th scope="col">Bệnh Chính </th>
                        
                        <th scope="col">Hướng điều trị</th>
                        
                       
                       
                       

                      </tr>
                    </thead>

                    <?php     $conn = mysqli_connect('localhost', 'root', '', 'benhvien');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          $mabn = $_GET['id'];
          //b2:thực hiện truy vấn
          $sql = "SELECT * FROM dieutri where mabn= '$mabn'";
          $result = mysqli_query($conn, $sql);
          //b3:xử lí kq truy vấn
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
                    <tbody>
                      <tr>
                      
                        <td><?php echo $row['benhchinh'] ?></td>
                        <td><?php echo $row['huongdieutri'] ?></td>
                       
                        
                       
                       
                    </tbody>

                    <?php 
            }
        }
                    ?>
                  </table>
                  <div class= "col-md-3"> </div>
         </div>       
            <!-- -->


        <!-- </div> -->
    </div>
</div>

<?php include './template/footer.php' ?>
