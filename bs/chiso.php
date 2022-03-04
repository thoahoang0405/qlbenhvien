<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉ số xét nghiệm</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href=’https://fonts.googleapis.com/css?family=Sofia’ rel=’stylesheet’/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="../assets/css/bs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    



    <?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
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
            <h2> CHỈ SỐ XÉT NGHIỆM CỦA BỆNH NHÂN </h2>
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
                        
                        <span class="material-icons  col-md-1 text-start">
                   logout
                   </span>
                </div>
                     
                </div>
                
            </div> 
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <H3 class=" text-primary ms-5 mt-5">Nhập Mã Số bệnh nhân để tìm kiếm bảng chỉ số xét nghiệm</H3>
                    <br>
                    <input class="form-control ms-5 center input_search" id="" type="search" placeholder="Search" aria-label="Search" style="width: 500px">
                   </div>   
            </div>      
            <div class="row  " >
                 <div class="col-md-2"></div>
                 <div class="col-md-10 ">
                 <div class=" SEARCH_RESULT bg-light ms-5"  style=" position:absolute;width:500px; ">  
                  <p class=" "> 
                      <a href="./ctchiso.php?id=<?php echo $row['mabn']; ?>" class="text-decoration-none text-black "> </a></p> 
                  </div>
                 </div>



            </div>      
                  
           
            <!-- -->


        <!-- </div> -->
    </div>
</div>




<script>


            </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../assets/js/bs.js"></script>
</body>
</div>
</html>