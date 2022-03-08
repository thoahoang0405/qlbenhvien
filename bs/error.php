
    <?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thành công</title>
    <?php include './template/header.php' ?>
</head>

<body>

<?php



include 'dbConfig.php';
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






<div class="container-fluid bg-white pb-5">
    <div class="row ">
        <div class="col-md-2">
            <img src="../assets/img/0006.png" alt=""  style="width:  400px">

        </div>
        <div class="col-md-10 mt-5">
            <div class="row">
                
                <div class=" text-end  ">
                    <div class="row">
                        <span class="col-md-9"></span>
                        <button class="col-md-1  text-center btn-dark"> <a href="./index.php" class="text-decoration-none text-white"> quay lại</a></button> 
                          
                        <a href="logout.php" class="text-decoration-none text-start col-md-1">
                        <span class="material-icons  col-md-1 ">
                   logout
                   </span></a>
                </div>
                     
                </div>
                
            </div> 
            <div class="row mt-5">
            <div class="col-md-2"></div>

                <div class="col-md-3 "><img src="../assets/img/comp_3.gif" alt=""  style="width:  400px; "></div>
                <div class="col-md-5 ms-2 " style="font-size: 50px; margin:100px; font-weight:700;">Có Lỗi Xảy Ra</div>
                
                
                    
            </div>  
            </div>    
           
           
            <!-- -->


        <!-- </div> -->
    </div>
</div>




<script>


            </script>
 <?php include './template/footer.php' ?>