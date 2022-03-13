<?php 
session_start();
if(isset($_SESSION['LoginOKBenhNhan'])){
    unset($_SESSION['LoginOKBenhNhan']);
    header('location:../../UI/benhnhan/login_benhnhan.php');
    
}
?>