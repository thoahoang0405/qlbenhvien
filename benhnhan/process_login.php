
 <?php 
session_start();

if(isset($_POST['btnLogin'])){
    $mabn=$_POST['mabn'];
    $matkhau=$_POST['txtmatkhau'];
    $conn =mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("kết nối thất bại!");
    }
 
    $sql = "SELECT * FROM benhnhan WHERE mabn = '$mabn' AND matkhau = '$matkhau' "; 
    $result = mysqli_query($conn,$sql);
    $rs= mysqli_fetch_array($result);
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION['LoginOKBenhNhan'] = $mabn;
        // $rs['mabn'] = $_SESSION['LoginOK'];
        header("location: index.php"); 
        }
        
    else{
        $error = "Bạn nhập thông tin chưa chính xác";
        header("location: login_benhnhan.php?error=$error"); 
    }   
// else {
//     header('location: index.php');
// }
}
mysqli_close($conn);

?>
