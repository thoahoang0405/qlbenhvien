<?php 
session_start();
if(isset($_SESSION['isLoginYta'])){
    unset($_SESSION['isLoginYta']);
    header('location:login.php');
    
}

?>
