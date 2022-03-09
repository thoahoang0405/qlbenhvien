<?php session_start();
if (!isset($_SESSION['isLoginYta'])) {
    header("location:login.php");
}
?>
<?php


$mayta = $_GET['id'];
include 'dbConfig.php';

$query = "SELECT * FROM yta WHERE  mayta ='$mayta'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);

mysqli_close($db);

$ten = $rs['ten'];
$ngaysinh = $rs['ngaysinh'];
$gioitinh = $rs['gioitinh'];
$sdt = $rs['std'];
$diachi = $rs['diachi'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập y tá</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href=’https://fonts.googleapis.com/css?family=Sofia’ rel=’stylesheet’ />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/ytalogin.css">


    <div class="container-fluid ">
        <div class="row loginbs">

            <div class="col-md-12 pt-4 pb-5 text-black text-center">
                <h2>THÔNG TIN CÁ NHÂN </h2>

            </div>
        </div>
    </div>


    <div class="container-fluid loginbs ">
        <div class="row ">
            <div class="col-md-2 pb-5">
                <img src="../assets/img/nurse5.png" alt="" style="width:  650px">

            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class=" text-end  ">
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <a class="text-decoration-none text-black" href="index.php">
                                    <h3>Quay lại</h3>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="d-flex  justify-content-center align-items-center text-decoration-none text-black" href="logout.php">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    <h3>Đăng Xuất</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <form class=" pe-5">
                            <div class="mb-3 ms-5">
                                <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Mã Y Tá</label>
                                <input readonly type="text" class="form-control " style="width: 350px" value="<?php echo $mayta ?>">

                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-2 mb-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-5 ">
                        <form class=" pe-5">
                            <div class="mb-3 ms-5">
                                <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Họ và Tên</label>
                                <input readonly type="text" class="form-control " style="width: 350px" value="<?php echo $ten ?>">

                            </div>
                    </div>
                    <div class="col-md-5 ">
                        <form class=" pe-5">
                            <div class="mb-3 ms-5">
                                <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Số Điện Thoại</label>
                                <input readonly type="text" class="form-control " style="width: 350px" value="<?php echo $sdt ?>">

                            </div>

                    </div>

                </div>

                <div class="row mt-2 mb-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-5 ">
                        <form class=" pe-5">
                            <div class="mb-3 ms-5">
                                <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Địa Chỉ</label>
                                <input readonly type="text" class="form-control " style="width: 350px" value="<?php echo $diachi ?>">

                            </div>
                    </div>
                    <div class="col-md-5 ">
                        <form class=" pe-5">
                            <div class="mb-3 ms-5">
                                <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Giới Tính</label>
                                <input readonly type="text" class="form-control " style="width: 350px" value="<?php echo $gioitinh ?>">

                            </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>