<?php 
session_start();
if(isset($_SESSION['LoginOK'])){
    unset($_SESSION['LoginOK']);
    header('location:loginbs.php ');
    
}

?>
<!-- <a href="../yta/login.html"><a/> -->