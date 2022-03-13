<?php session_start();
if (!isset($_SESSION['LoginOKBenhNhan'])) {
    header("location:login_benhnhan.php");
}
?>
<?php


$mabn = $_GET['id'];
$conn =mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("kết nối thất bại!");
    };

$query = "SELECT * FROM donthuoc WHERE  mabn ='$mabn'";
$result = mysqli_query($conn, $query);
$rs = mysqli_fetch_array($result);

mysqli_close($conn);

 $madonthuoc = $rs['madonthuoc'];
$ngaybatdau = $rs['ngaybatdau'] ;
 $ngayketthuc = $rs['ngayketthuc'];
$thongtindonthuoc=$rs['thongtindonthuoc'];
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
<body style ="background-color: rgba(192, 243, 252, 0.521)">

<h1 class="text-center mt-5" style="font-size: 60px;">ĐƠN THUỐC</h1>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row" style=" margin: 70px;padding: 50px;font-size: 40px;">
				<div class="col-md-4">
					<tr>
						<td>MÃ ĐƠN THUỐC</td>
						<td><input type="text" name="madonthuoc" value="<?php echo $madonthuoc ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>MÃ BỆNH NHÂN</td>
						<input type="text" name="mabn" value="<?php echo $mabn ?>" readonly>
					</tr>
				</div>
				<div class="col-md-4">
					<tr>
						<td>NGÀY BẮT ĐẦU</td>
						<td><input type="text" name="ngaybatdau" value="<?php echo $ngaybatdau ?>" readonly></td>
					</tr>
				</div>
			</div>
			<div class="row" style=" margin: 70px;padding: 60px;font-size: 40px;">
				<div class="col-md-6">
					<tr>
						<td>NGÀY KẾT THÚC</td>
						<td><input type="text" name="ngayketthuc" value="<?php echo $ngayketthuc ?>" readonly></td>
					</tr>
				</div>
				<div class="col-md-6">
					<tr>
						<td>THÔNG TIN ĐƠN THUỐC</td>
						<td>
						<textarea rows="3" cols="30" name="thongtindonthuoc" form="usrform"> <?php  echo $thongtindonthuoc  ?>
                        </textarea>
					</td>
					</tr>
				</div>

			</div>
			<a href="index.php"><button class="vn">QUAY TRỞ LẠI</button></a>
            <a href="../../BusinessLogic/benhnhan/logout.php"><button class="vn">ĐĂNG XUẤT</button></a> 
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
				integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
				crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
				integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
				crossorigin="anonymous"></script>
			</body>