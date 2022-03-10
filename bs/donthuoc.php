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
    <title>Đơn Thuốc</title>
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








<div class="container-fluid loginbs">
    <div class="row ">
       
        <div class="col-md-12 pt-4 pb-5 text-black text-center">
            <h2> ĐƠN THUỐC,CHỈ SỐ XÉT NGHIỆM CỦA BỆNH NHÂN </h2>
        </div>
    </div>
</div>


<div class="container-fluid loginbs pb-5">
    <div class="row ">
        <div class="col-md-2">
            <img src="../assets/img/0006.png" alt=""  style="width:  400px">

        </div>
        <div class="col-md-10">
            <div class="row">
                <div class=" text-secondary text-start mt-5 ms-5">
                <h3>Xin Chào Bác Sĩ <?php echo $tenbs ?></h3>
                     
                </div>
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
                <div class="col-md-10">
                    <H3 class=" text-primary ms-5 mt-5">Nhập Mã Số bệnh nhân để tìm kiếm đơn thuốc,chỉ số xét nghiệm</H3>
                    <br>
                    <input class="form-control ms-5 center input_search1" type="search" placeholder="Search" aria-label="Search" style="width: 500px">
                  
                  </div>
                
         </div>    
         <div class="row  " >
                 <div class="col-md-2"></div>
                 <div class="col-md-10 ">
                 <div class=" SEARCH_RESULT1  ms-5"  style=" position:absolute;width:500px; background-color: rgba(192, 243, 252, 0.521); ">  
                  <p class=" "> 
                      <a href="" class="text-decoration-none text-black "> </a></p> 
                  </div>
                 </div>



            </div>         

           
            <!-- -->


        <!-- </div> -->
    </div>
</div>
<script>

    $(document).ready(function() {

        $(".input_search1").keyup(function() {
        var txt = $(".input_search1").val();
       
      
           $.post('ajaxdonthuoc.php', {data1:txt}, function(data1){
               $('.SEARCH_RESULT1').html(data1);


           })
       

        })

    })
    </script>






<?php include './template/footer.php' ?>