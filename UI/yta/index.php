<?php
session_start();
if (!isset($_SESSION['isLoginYta'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chính Y Tá</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href=’https://fonts.googleapis.com/css?family=Sofia’ rel=’stylesheet’ />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bs.css">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/ytalogin.css">

    <div class="container-fluid ">
        <div class="row loginbs">

            <div class="col-md-12 pt-4 pb-5 text-black text-center">
                <h2>CHÀO MỪNG BẠN ĐẾN VỚI HỆ THỐNG QUẢN LÝ CỦA </h2>
                <h1 class="text-center">THNB Hospital</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid loginbs ">
        <div class="row ">
            <div class="col-md-2 pb-5">
                <img src="../assets/img/nurse5.png" alt="" style="width:  560px">

            </div>
            <?php include '../../BusinessLogic/yta/dbConfig.php';
            $mayta = $_SESSION['isLoginYta'];
            $query = "SELECT * FROM yta WHERE mayta='$mayta' ";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            }
            mysqli_close($db);
            ?>

            <div class="col-md-10">
                <div class="row">
                    <div class=" text-secondary text-start mt-3 ">
                        <h3 class="text-center">Xin Chào Y Tá <?php echo $row['ten'] ?></h3>

                    </div>
                    <div class=" text-end  ">
                        <div class="row">
                            <span class="col-md-9"></span>

                            <a href="../../BusinessLogic/yta/logout.php" class="col-md-2 text-decoration-none text-start text-black text-decoration-none d-flex justify-content-center align-items-center">
                                <h3>Đăng Xuất</h3>
                                <span class="material-icons ">
                                    logout
                                </span>
                            </a>

                        </div>

                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-md-2"></div>
                    <div class="col-md-5 ">
                        <button type="button" class="btn-info btnxem"> <a class="text-decoration-none text-white" href="benhan.php?id=<?php echo $row['mayta']; ?>">Xem Bệnh Án và Đơn Thuốc</a> </button>
                    </div>
                    <div class="col-md-5">
                        <button type="button" class="btn-info btnxem"> <a class="text-decoration-none text-white" href="ttyta.php?id=<?php echo $row['mayta']; ?>">Thông tin cá nhân</a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>