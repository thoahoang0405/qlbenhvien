
<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
<?php


$mabs = $_GET['id'];
include 'dbConfig.php';

$query = "SELECT * FROM bacsi WHERE  mabs ='$mabs'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);

mysqli_close($db);

$makhoa = $rs['makhoa'];
$tenbs = $rs['tenbs'] ;
$sdt = $rs['sdt'];
$diachi=$rs['diachi'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin bác sĩ</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href=’https://fonts.googleapis.com/css?family=Sofia’ rel=’stylesheet’/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bs.css">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/ytalogin.css">


<div class="container-fluid ">
    <div class="row loginbs">
       
        <div class="col-md-12 pt-4 pb-5 text-black text-center">
            <h2>THÔNG TIN CÁ NHÂN  </h2>
            
        </div>
    </div>
</div>


<div class="container-fluid loginbs ">
    <div class="row ">
        <div class="col-md-2 pb-5">
            <img src="../assets/img/0006.png" alt=""  style="width:  400px">

        </div>
        <div class="col-md-10">
            <div class="row">
                <!-- <div class=" text-secondary text-start mt-3 ms-4">
                    <h3>Xin Chào Bác Sĩ Quang Trung</h3>
                     
                </div> -->
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
            <div class="row mt-2">
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Mã Bác Sĩ</label>
                          <input readonly type="text" class="form-control "  style="width: 350px" value="<?php echo $mabs ?>">
                          
                        </div>
                    </form>
                  </div>
                  <div class="col-md-5  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Mã Khoa</label>
                          <input readonly type="text" class="form-control "  style="width: 350px" value="<?php echo $makhoa ?>">
                          
                        </div>
                 
                  </div>
                
            </div>
            <div class="row mt-2 mb-5">
                <div class="col-md-2"></div>
                <div class="col-md-5 ">
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Họ và Tên</label>
                          <input readonly type="text" class="form-control "  style="width: 350px" value="<?php echo $tenbs ?>">
                          
                        </div>
                    </div>
                  <div class="col-md-5 ">
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Số Điện Thoại</label>
                          <input readonly type="text" class="form-control "  style="width: 350px" value="<?php echo $sdt ?>">
                          
                        </div>
                  
              </div>
                
            </div>  
            <div class="row mt-2 mb-5">
                <div class="col-md-2"></div>
                <div class="col-md-5 ">
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Địa Chỉ</label>
                          <input readonly type="text" class="form-control "  style="width: 350px" value="<?php echo $diachi ?>">
                          
                        </div>
                  </div>
                  <div class="col-md-5"></div>
                
            
            
            </div> 
         </div>       

           
            <!-- -->


        <!-- </div> -->
    </div>
</div>







</body>
</div>
</html>