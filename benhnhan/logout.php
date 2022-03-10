<?php 
session_start();
if(isset($_SESSION['LoginOK'])){
    unset($_SESSION['LoginOK']);
    header('location:login_benhnhan.php');
    
}
?>