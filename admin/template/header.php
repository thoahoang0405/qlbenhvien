<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/add_admin.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body class="bg"> 
    <header>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="container-fluid">
                <a class="navbar-brand " >QUẢN LÝ BỆNH VIỆN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="admin.php">Quản lý bác sĩ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="yta.php">Quản lý y tá</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="letan.php">Quản lý lễ tân</a>
                    </li>
                    <?php
                        if(isset($_SESSION['isLoginOK']))
                        {
                            echo '<li class="nav-item">';
                            echo "<a class='nav-link '>Welcome: ".$_SESSION['isLoginOK']."</a>";
                            echo '</li>';
                            echo '<li class="nav-item">';
                            echo "<a class='nav-link' href='logout.php'>Đăng xuất</a>";
                            echo '</li>';
                        }

                    ?>
                    
                </ul>
                
                </div>
            </div>
            </nav>
        
    </header>