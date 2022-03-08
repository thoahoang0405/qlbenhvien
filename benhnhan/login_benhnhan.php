<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".././assets/css/login_benhnhan.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="img-sign">
        <img src=".././assets/img/benhnhan.png" alt="" class="imgbtx">
        <div class="main">
            <form method="POST" class="form" action="process_login.php">
                <h6 class="heading mt-1">XIN CHÀO BỆNH NHÂN</h6>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <form role="form">
                            <input type="text" class="form-control" id="inputmabn" name="mabn"
                                placeholder="Mã bệnh nhân" required autofocus />
                            <input type="password" class="form-control mt-3 mb-2" id="inputmatkhau" name="txtmatkhau"
                                placeholder="Mật khẩu" required />
                            <button class="form-submit" name="btnLogin">Submit</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>