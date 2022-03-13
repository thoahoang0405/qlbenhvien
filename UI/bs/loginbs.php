<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập bác sĩ</title>
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
    <div class="container ">
        <div class="row">
            <div class="col-md-4 avtloginbs ">
                <img src="../assets/img/DOC_pose1_new.png" alt="">
        
            </div>
            <div class="col-md-8 mt-5">
                <h3 CLASS="mt-5">ĐĂNG NHẬP TÀI KHOẢN CỦA BÁC SĨ</h3>
                <form class="p-3 pe-5"  action="../../BusinessLogic/bs/process_login.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Tên Đăng Nhập</label>
                      <input type="text" class="form-control " name="txtTen"  style="width: 350px" required autofocus>
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
                      <input type="password" class="form-control " name="txtMK" style="width: 350px" required>
                    </div>
                    <?php
                            if (isset($_GET['error'])) {
                                echo "<p style='color:red'> {$_GET['error']} </p>";
                            }

                            ?>

                    <button type="submit" class="btn btn-primary " name="btnĐN">Đăng Nhập</button>
                  </form>
                  <a href="../index.html" class="text-black  text-decoration-none ms-3"> Quay lại trang chủ</a>
        
            </div>
        </div>
        
        </div>

</div>









</body>
</div>
</html>