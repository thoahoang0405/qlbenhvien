<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
<?php


$mabn = $_GET['id'];
include 'dbConfig.php';

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
    <title>Thêm đơn thuốc</title>
    <?php include './template/header.php' ?>
</head>

<body>

   


<div class="container-fluid loginbs">
    <div class="row  ">
       
        <div class="col-md-12 pt-4 pb-5 text-primary text-center">
            <h2>THÊM ĐƠN THUỐC BỆNH NHÂN </h2>
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
                        <button class="col-md-1  text-center btn-dark"> <a href="./CTdonthuoc.php?id=<?php echo $mabn; ?>" class="text-decoration-none text-white"> quay lại</a></button>
                        
                           
                        <a href="logout.php" class="text-decoration-none text-start col-md-1">
                        <span class="material-icons  col-md-1 ">
                   logout
                   </span></a>
                </div>
                     
                </div>
                
            </div> 
            <form action="process_themdonthuoc.php " method="post">
            <div class="row mt-5 ">
               
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Mã Bệnh Nhân</label>
                      <input readonly type="text" class="form-control " name="txtmabn" value="<?php echo $mabn ?>"  style="width: 350px" required>
                      
                    </div>
               
               
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Mã Đơn Thuốc</label>
                      <input  type="text" class="form-control " name="txtMDT" style="width: 350px" required>
                      
                    </div>
               
            </div>
            <div class="row ">
               
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Ngày Bắt Đầu</label>
                      <input  type="text" class="form-control " name="txtNBD" style="width: 350px" required>
                      
                    </div>
               
               
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Ngày Kết Thúc</label>
                      <input  type="text" class="form-control " name="txtNKT" style="width: 350px" required>
                      
                    </div>
               
            </div>
            <div class="row ">
               
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Thông Tin Đơn Thuốc</label>
                      <input  type="text" class="form-control " name="txtTTT" style="width: 450px" required>
                      
                    </div>
               
            </div>


            <button type="submit" name="btnluu" style="width: 100px;" class="mt-3 ms-3 btn btn-outline-info ">Lưu lại</button> 
</form>
           
            <!-- -->


        <!-- </div> -->
    </div>
</div>

</body>
</div>
</html>