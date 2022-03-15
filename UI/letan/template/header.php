<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/add_admin.css">
    <link rel="stylesheet" href="../assets/css/header.css">
</head>
<body class="bg"> 
    <header>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            <div class="container-fluid">
                <a class="navbar-brand " >QUẢN LÝ BỆNH NHÂN</a>
            </div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
            </nav>
        
    </header>