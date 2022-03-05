<?php
session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:loginbs.php");
    }
  ?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bác Sĩ</title>
    <?php include './template/header.php' ?>
</head>

<body>

 

<div class="container-fluid ">
    <div class="row loginbs">
       
        <div class="col-md-12 pt-4 pb-5 text-black text-center">
            <h2>CHÀO MỪNG BÁC SĨ ĐẾN VỚI HỆ THỐNG QUẢN LÝ CỦA </h2>
             <h1 class="text-center">THNB hospital</h1>
        </div>
    </div>
</div>


<div class="container-fluid loginbs ">
    <div class="row ">
        <div class="col-md-2 pb-5">
            <img src="../assets/img/0006.png" alt=""  style="width:  400px">

        </div>
        <?php include 'dbConfig.php';
                    $mabs = $_SESSION['LoginOK'];
                    $query = "SELECT * FROM bacsi WHERE mabs='$mabs' ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                    }
                    mysqli_close($db);
                    ?>
                   
        <div class="col-md-10">
            <div class="row">
                <div class=" text-secondary text-start mt-3 ms-4">
                    <h3>Xin Chào Bác Sĩ <?php echo $row['tenbs'] ?></h3>
                     
                </div>
                <div class=" text-end  ">
                    <div class="row">
                        <span class="col-md-9"></span>
                        <a href="ttbs.php?id=<?php echo $row['mabs']; ?>" class="text-decoration-none col-md-2"><span class="  material-icons ">
                            account_circle
                            </span></a>
                        
                            <a href="logout.php" class="text-decoration-none text-start col-md-1">
                        <span class="material-icons  col-md-1 ">
                   logout
                   </span></a>
                
                </div>
                     
                </div>
                
            </div> 
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-5 ">
                   <button type="button" class="btn-info btnxem"> <a class="text-decoration-none text-white"  href="benhan.php?id=<?php echo $row['mabs']; ?>">Bệnh Án</a> </button>
                </div>
                <div class="col-md-5">
                   <button type="button" class="btn-info btnxem"> <a class="text-decoration-none text-white" href="donthuoc.php?id=<?php echo $row['mabs']; ?>">Đơn Thuốc</a> </button>
                </div>
                
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-2"></div>
                <div class="col-md-5 ">
                   <button type="button" class="btn-info btnxem "> <a class="text-decoration-none text-white"  href="kqxn.php?id=<?php echo $row['mabs']; ?>">Kết quả khám bệnh</a> </button>
                </div>
                <div class="col-md-5 ">
                   <button type="button" class="btn-info btnxem"> <a class="text-decoration-none text-white" href="chiso.php?id=<?php echo $row['mabs']; ?>">Chỉ Số xét nghiệm</a> </button>
                </div>
                
            </div>   
         </div>       

           
            <!-- -->


        <!-- </div> -->
    </div>
</div>










<?php include './template/footer.php' ?>