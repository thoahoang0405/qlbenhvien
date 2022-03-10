<?php session_start();
if (!isset($_SESSION['isLoginYta'])) {
    header("location:login.php");
}
?>
<?php


$mabn = $_GET['id'];
include 'dbConfig.php';

$query = "SELECT * FROM benhnhan WHERE  mabn ='$mabn'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);
$tenbn=$rs['tenbn'];

$query = "SELECT * FROM donthuoc WHERE  mabn ='$mabn'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);

$madonthuoc=$rs['madonthuoc'];
$ngaybatdau=$rs['ngaybatdau'];
$ngayketthuc=$rs['ngayketthuc'];
$thongtindonthuoc=$rs['thongtindonthuoc'];
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Bệnh Án</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href=’https://fonts.googleapis.com/css?family=Sofia’ rel=’stylesheet’ />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bs.css">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../assets/css/ytalogin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">



    <div class="container-fluid ">
        <div class="row bg-light ">

            <div class="col-md-12 pt-4 pb-5 text-primary text-center">
                <h2> Bệnh Án</h2>
            </div>
        </div>
    </div>
    <?php



$mayta = $_GET['id'];
include 'dbConfig.php';
$query = "SELECT * FROM yta WHERE  mayta ='$mayta'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);


$ten = $rs['ten'] ;
$ngaysinh=$rs['ngaysinh'];
$gioitinh=$rs['gioitinh'];
$sdt = $rs['std'];
?>


    <div class="container-fluid  pb-5">
        <div class="row ">

            <div class="col-md-12">
                <div class="row">
                    <div class=" text-secondary text-start">
                        <div class="row mt-5">
                           <div class="col-md-8"></div>   
                            <a href="benhan.php" class="col-md-1 text-decoration-none">
                                <i class="bi bi-arrow-return-right"></i>
                                Quay Trở Lại
                            </a>
                            <!-- <button class="col-md-1  text-center btn-dark"> <a href="benhan.php" class="text-decoration-none text-white"> quay lại</a></button>  -->
                            <a href="logout.php" class="col-md-2 text-decoration-none">
                            <i class="bi bi-box-arrow-right"></i>
                            Đăng Xuất
                            </a>
                    </div>
                    <div class=" text-end  ">
                        
                            
                        </div>

                    </div>

                </div>
                <div class="row">
                    <h3 class="text-center mt-5" >Mã Bệnh Nhân: <?php echo $mabn ?></h3>
                </div>
                <div class="row mt-5">
                    <table class="table table-info ">
                        <thead>
                            <tr>
                                <th scope="col">Mã Đơn Thuốc </th>

                                <th scope="col">Ngày Bắt Đầu</th>
                                <th scope="col">Ngày Kết Thúc</th>
                                <th scope="col">Thông Tin Đơn Thuốc</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><?php echo $madonthuoc ?></th>
                                <th><?php echo $ngaybatdau ?></th>
                                <th><?php echo $ngayketthuc ?></th>
                                <th><?php echo $thongtindonthuoc ?></th>
                        </tbody>
                    </table>

                </div>


                <!-- -->


                <!-- </div> -->
            </div>
        </div>

</body>
</div>

</html>