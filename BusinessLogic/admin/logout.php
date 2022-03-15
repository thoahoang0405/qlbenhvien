<?php
    session_start();

    if(isset($_SESSION['isLoginAdmin'])){
        unset($_SESSION['isLoginAdmin']);
        header('location:../../UI/index.html ');
    }

?>