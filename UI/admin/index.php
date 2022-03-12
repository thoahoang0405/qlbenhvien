
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin_Admin_Netflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/signinadmin.css"> 
</head>

<body class="bg">
    <div class="container">
        <div class="col-lg-4 col-md-8 col-sm-10 col-12 mx-lg-auto mx-md-auto mx-5m-auto mx-auto">
            <div class="form__data">
                <div>
                    <div class="form_title">
                        <h1>Đăng nhập Admin</h1>
                    </div>
                    <form action="../../BusinessLogic/admin/process-login.php" method="post">
                            <div class="mb-3">
                              <input  name="txtEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên đăng nhập">
                              <div id="email" class="form-text" >Vui lòng nhập tên đăng nhập</div>
                            </div>
                            <div class="mb-3">
                              <input type="password" class="form-control" id="exampleInputPassword1" name="txtPass" placeholder="Mật khẩu">
                              <div id="password" class="form-text">Mật khẩu của bạn phải chứa từ 4 đến 60 ký tự.</div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="btnSignIn">Đăng nhập</button>
                            
                            
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>