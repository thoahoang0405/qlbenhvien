<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:login_benhnhan.php");
}
?>
<?php


$mabn = $_GET['id'];
$conn =mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("kết nối thất bại!");
    };

$query = "SELECT * FROM benhnhan  WHERE  mabn ='$mabn'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result) ;
}
?>
<?php
$mabn = $_GET['id'];
$conn1 =mysqli_connect('localhost','root','','benhvien');
    if(!$conn1){
        die("kết nối thất bại!");
    };

$query1 = "SELECT * FROM lydovaovien  WHERE  mabn ='$mabn'";
$result1 = mysqli_query($conn1, $query1);
$rs = mysqli_fetch_array($result1);

mysqli_close($conn1);

// if (mysqli_num_rows($result1) > 0) {
// 	$row1 = mysqli_fetch_assoc($result1) ;

// mysqli_close($conn);

// $tenbn = $['tenbn'];
// $giotinh = $rs['giotinh'] ;
// $ngaysinh = $rs['ngaysinh'];
// $doituong = $rs['doituong'];
// $sothebhyt = $rs['sothebhyt'];
// $thoihanthe = $rs['thoihanthe'];
// $tennguoinha = $rs['tennguoinha'];
// $stdnguoinha = $rs['stdnguoinha'];
// $trangthai = $rs['trangthai'];
// $bacsiphutrach = $rs['bacsiphutrach'];
// $ngaynhapvien = $rs['ngaynhapvien'];
$ngaykhaibao = $rs['ngaykhaibao'];
$lydovaovien = $rs['lydovaovien'];
$quatrinhbenhly=$rs['quatrinhbenhly'];
$tieusu=$rs['tieusu'];
?>
<?php
$mabn = $_GET['id'];
$conn2 =mysqli_connect('localhost','root','','benhvien');
    if(!$conn2){
        die("kết nối thất bại!");
    };

$query2 = "SELECT * FROM dieutri  WHERE  mabn ='$mabn'";
$result2 = mysqli_query($conn2, $query2);
$rs = mysqli_fetch_array($result2);

mysqli_close($conn2);
$benhchinh=$rs['benhchinh'];
$huongdieutri=$rs['huongdieutri'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".././assets/css/benh_an.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<h1 class="text-center mt-5" style="font-size: 60px;">BỆNH ÁN</h1>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row" style=" margin: 40px;padding: 40px;font-size: 30px;">
				<div class="col-md-4"> 
					<tr >
					<td>MÃ BỆNH NHÂN</td>
					<td><input type="text" name="mabn" value="<?php echo $row['mabn'] ?> " readonly></td>
				</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>TÊN BỆNH NHÂN</td>
						<td><input type="text" name="tenbn" value="<?php echo $row['tenbn'] ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>GiỚI TÍNH</td>
						<td><input type="text" name="gioitinh" value="<?php echo $row['gioitinh'] ?>" readonly></td>
					</tr>
				</div>
			</div>
			<div class="row" style=" margin: 40px;padding: 40px;font-size: 30px;">
				<div class="col-md-4">
					<tr>
						<td>NGÀY SINH</td>
						<td><input type="text" name="ngaysinh" value="<?php echo $row['ngaysinh'] ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>ĐỐI TƯỢNG</td>
						<td><input type="text" name="doituong" value="<?php echo $row['doituong'] ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>SỐ THẺ BHYT</td>
						<td><input type="text" name="sothebhyt" value="<?php echo $row['sothebhyt'] ?>" readonly></td>
					</tr>
				</div>
			</div>
			<div class="row" style=" margin: 40px;padding: 40px;font-size: 30px;">
				<div class="col-md-4">
					<tr>
						<td>THỜI HẠN THẺ</td>
						<td><input type="text" name="thoihanthe" value="<?php echo $row['thoihanthe'] ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>TÊN NGƯỜI NHÀ</td>
						<td><input type="text" name="tennguoinha" value="<?php echo $row['tennguoinha'] ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>SĐT NGƯỜI NHÀ</td>
						<td><input type="text" name="stdnguoinha" value="<?php echo $row['stdnguoinha'] ?>" readonly></td>
					</tr>
				</div>
			</div>
			<div class="row" style=" margin: 40px;padding: 40px;font-size: 30px;">
				<div class="col-md-4">
					<tr>
						<td>TRẠNG THÁI</td>
						<td><input type="text" name="trangthai" value="<?php echo $row['trangthai'] ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>BÁC SĨ PHỤ TRÁCH</td>
						<td><input type="text" name="bacsiphutrach" value="<?php echo $row['bacsiphutrach'] ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>BÁC SĨ PHỤ TRÁCH</td>
						<td><input type="text" name="ngaynhapvien" value="<?php echo $row['ngaynhapvien'] ?>" readonly></td>
					</tr>
				</div>
				
			</div>
			<div class="row" style=" margin: 40px;padding: 40px;font-size: 30px;">
			<div class="col-md-4">
					<tr>
						<td>NGÀY KHAI BÁO</td>
						<td><input type="text" name="ngaykhaibao" value="<?php echo $ngaykhaibao ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>LÝ DO VÀO VIỆN</td>
						<td><input type="text" name="lydovaovien" value="<?php echo $lydovaovien ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>QUÁ TRÌNH BỆNH LÝ</td>
						<td><input type="text" name="quatrinhbenhly" value="<?php echo $quatrinhbenhly ?>" readonly></td>
					</tr>
				</div>
</div>
				<div class="row" style=" margin: 40px;padding: 40px;font-size: 30px;">
				<div class="col-md-4">
					<tr>
						<td>TIỂU SỬ</td>
						<td><input type="text" name="tieusu" value="<?php echo $tieusu ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>Bệnh chính</td>
						<td><input type="text" name="benhchinh" value="<?php echo $benhchinh ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>HƯỚNG ĐIỀU TRỊ</td>
						<td><input type="text" name="huongdieutri" value="<?php echo $huongdieutri ?>" readonly></td>
					</tr>
				</div>
			</div>
		</div>
	</div>
</div>

<a href="http://localhost/qlbenhvien/benhnhan/login_benhnhan.php"><button class="vn">QUAY LẠI TRANG CHỦ</button></a>
<a href="http://localhost/qlbenhvien/benhnhan/index.php"><button class="vn">QUAY LẠI TRANG TÌM</button></a>

       
        
        
        
        
        
        
        
        
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>
</body>