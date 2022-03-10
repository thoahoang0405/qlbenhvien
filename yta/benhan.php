<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bệnh Án</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href=’https://fonts.googleapis.com/css?family=Sofia’ rel=’stylesheet’ />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/bs.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <?php session_start();
    if (!isset($_SESSION['isLoginYta'])) {
        header("location:login.php");
    }
    ?>
    <?php
    include 'dbConfig.php';
    $mayta = $_SESSION['isLoginYta'];
    $query = "SELECT * FROM yta WHERE  mayta ='$mayta'";
    $result = mysqli_query($db, $query);
    $rs = mysqli_fetch_array($result);

    mysqli_close($db);

    $ten = $rs['ten'];
    $ngaysinh = $rs['ngaysinh'];
    $gioitinh = $rs['gioitinh'];
    $sdt = $rs['std'];
    ?>



    <div class="container-fluid loginbs">
        <div class="row ">

            <div class="col-md-12 pt-4 pb-5 text-black text-center">
                <h2>TRA CỨU BỆNH ÁN,ĐƠN THUỐC CỦA BỆNH NHÂN </h2>
            </div>
        </div>
    </div>


    <div class="container-fluid loginbs pb-5">
        <div class="row ">
            <div class="col-md-2">
                <img src="../assets/img/nurse5.png" alt="" style="width:  630px">
            </div>
            <div class="col-md-10">
                <div class="row">

                    <div class=" text-end  ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class=" text-secondary text-start ">
                                    <h3 class="text-center">Xin Chào Y tá <?php echo $ten ?></h3>
                                </div>
                            </div>
                            <a href="index.php" class="col-md-3 text-decoration-none text-black d-flex justify-content-center align-items-center">
                                <i class="bi bi-arrow-return-right me-2"></i>
                                <h3>Quay Trở Lại</h3>
                            </a>
                            <a href="logout.php" class="col-md-3 text-decoration-none text-black d-flex justify-content-center align-items-center">
                                <i class="bi bi-box-arrow-right me-3"></i>
                                <h3>Đăng Xuất</h3>
                            </a>

                        </div>

                    </div>

                </div>
                <div class="row">

                    <H3 class=" text-black text-center mt-5 ms-3">Nhập Mã Số bệnh nhân để tìm kiếm bệnh án,đơn thuốc</H3>
                    <br>
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <input class="form-control mt-3 center input_search" id="" type="search" placeholder="Search" aria-label="Search" style="width: 500px">
                        <div class="ms-5 SEARCH_RESULT bg-light " style="width:500px;">

                            <p class=" ">
                                <a href=" ctbenhan.php?id=<?php echo $row['mabn']; ?>" class="text-decoration-none text-black "> </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">

            </div>
        </div>

    </div>

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