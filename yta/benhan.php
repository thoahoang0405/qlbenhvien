<?php session_start();
if (!isset($_SESSION['isLoginYta'])) {
    header("location:loginbs.php");
}
?>
<?php


$mayta = $_GET['id'];
include 'dbConfig.php';
$query = "SELECT * FROM yta WHERE  mayta ='$mayta'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);

mysqli_close($db);
$ten = $rs['ten'] ;
$ngaysinh=$rs['ngaysinh'];
$gioitinh=$rs['gioitinh'];
$sdt = $rs['std'];
?>


<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập y tá</title>
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



<div class="container-fluid loginbs">
    <div class="row ">
       
        <div class="col-md-12 pt-4 pb-5 text-black text-center">
            <h2> BỆNH ÁN BỆNH NHÂN </h2>
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
                <h3>Xin Chào Y tá <?php echo $ten ?></h3>
                     
                </div>
                <div class=" text-end  ">
                    <div class="row">
                        <span class="col-md-9"></span>
                        <button class="col-md-1  text-center btn-dark"> <a href="./index.php" class="text-decoration-none text-white"> quay lại</a></button> 
                        
                        <span class="material-icons  col-md-1 text-start">
                   logout
                   </span>
                </div>
                     
                </div>
                
            </div> 
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <H3 class=" text-primary ms-5 mt-5">Nhập Mã Số bệnh nhân để tìm kiếm bệnh án</H3>
                    <br>
                    <input class="form-control ms-5 center " type="search" placeholder="Search" aria-label="Search" style="width: 500px">
                  
                  </div>
                
         </div>       

           
            <!-- -->


        <!-- </div> -->
    </div>
</div>







</body>
</div>
</html>