<?php 
session_start();
if(isset($_SESSION['LoginOK'])){
    unset($_SESSION['LoginOK']);
    header('location: ../yta/login.html ');
    
}

?>
<!-- <a href="../yta/login.html"><a/> -->