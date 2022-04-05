
<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
<?php


$mabn = $_GET['id'];
include '../../BusinessLogic/bs/dbConfig.php';

$query = "SELECT * FROM dieutri WHERE  mabn ='$mabn'";
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
    <title>Thêm kết điều trị</title>
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
    <div class="row  ">
       
        <div class="col-md-12 pt-4 pb-5 text-primary text-center">
            <h2>THÊM ĐIỀU TRỊ </h2>
        </div>
    </div>
</div>


<div class="container-fluid loginbs  pb-5">
    <div class="row ">
        
        <div class="col-md-12">
            <div class=" row">
               
                <div class=" text-end  ">
                    <div class="row">
                        <span class="col-md-9"></span>
                        <button class="col-md-1  text-center btn-dark"> <a href="./CTkqxetnghiem.php?id=<?php echo $mabn; ?>" class="text-decoration-none text-white"> quay lại</a></button>
                        
                       
                          
                        <a href="../../BusinessLogic/bs/logout.php" class="text-decoration-none text-start col-md-1">
                        <span class="material-icons  col-md-1 ">
                   logout
                   </span></a>
                </div>
                     
                </div>
                
            </div> 
            <form action="../../BusinessLogic/bs/process_themdieutri.php" method="post" style="margin-left: 200px;font-weight:700 ">
            <div class="row mt-5 ">
                
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Mã Bệnh Nhân</label>
                      <input readonly type="text" class="form-control " name="txtmabn"  value="<?php echo $mabn ?>" style="width: 350px" required>
                      
                    </div>
               
                
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Bệnh Chính</label>
                      <input  type="text" class="form-control " name="txtkhoakham"  style="width: 350px" required>
                      
                    </div>
               
            </div>
            <div class="row ">
                
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Hướng điều trị</label>
                      <input  type="text" class="form-control " name="txtkq"  style="width: 350px" required>
                      
                    </div>
               
                
                   
               
            </div>
           
            <button type="submit" name="btnluu" style="width: 100px; font-weight:700" class="mt-3 ms-3 btn btn-outline-info ">Lưu lại</button>     

            </form>
            <!-- -->


        <!-- </div> -->
    </div>
</div>

</body>
</div>
</html>