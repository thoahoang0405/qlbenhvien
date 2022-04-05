<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
?>
<?php



include '../../BusinessLogic/bs/dbConfig.php';
$mabn = $_GET['id'];
$query = "SELECT * FROM benhnhan WHERE  mabn ='$mabn'";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
}
mysqli_close($db);


?> 
<?php



include '../../BusinessLogic/bs/dbConfig.php';
$mabn = $_GET['id'];
$query = "SELECT * FROM lydovaovien WHERE  mabn ='$mabn'";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
  $row1 = mysqli_fetch_assoc($result);
}

mysqli_close($db);


?> 
<?php



include '../../BusinessLogic/bs/dbConfig.php';
$mabn = $_GET['id'];
$query = "SELECT * FROM dieutri WHERE  mabn ='$mabn'";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
  $row2 = mysqli_fetch_assoc($result);
}

mysqli_close($db);


?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem bệnh án</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href=’https://fonts.googleapis.com/css?family=Sofia’ rel=’stylesheet’/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/bs.css">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/ytalogin.css">

<div class="container-fluid loginbs">
    <div class="row ">
        <div class="col-md-12 pt-4 pb-2 text-primary text-center">
            <h2>BỆNH ÁN BỆNH NHÂN </h2>
            
        </div>
    </div>
</div>
<?php    include '../../BusinessLogic/bs/dbConfig.php';
$mabs = $_SESSION['LoginOK'];
$query = "SELECT * FROM bacsi WHERE  mabs ='$mabs'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);

mysqli_close($db);

$makhoa = $rs['makhoa'];
$tenbs = $rs['tenbs'] ;
$sdt = $rs['sdt'];
$diachi=$rs['diachi'];
?>
<div class="container-fluid loginbs">
    <div class="row pt-4 pb-2">
        <div class="col-md-8  text-secondary text-start">
            <h3>Xin Chào Bác Sĩ <?php echo $tenbs ?></h3>
             
        </div>
        <div class="col-md-4 text-end  ">
            <div class="row ms-5"> 
               <button class="col-md-3 text-center btn-dark"> <a href="./benhan.php?id=<?php echo $mabn ?>" class="text-decoration-none text-white"> quay lại</a></button>
              
               <a href="../../BusinessLogic/bs/logout.php" class="text-decoration-none text-start col-md-1">
                        <span class="material-icons  col-md-1 ">
                   logout
                   </span></a>
    </div>
</div>
<div class="container-fluid  pt-5">
	<div class="row">
		<div class="col-md-12"> 
			<div class="row">
                <div class="col-md-4 ps-3">
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Mã Bệnh Nhân</label>
                          <input readonly type="text" class="form-control " value="<?php echo $mabn ?>"  style="width: 350px" required>
                          
                        </div>
                    </form>
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Họ Và Tên</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['tenbn'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Giới Tính</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['gioitinh'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
			</div>
			<div class="row">
                <div class="col-md-4 ps-3">
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Ngày Sinh</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['ngaysinh'] ?>"  style="width: 350px" required>
                          
                        </div>
                    </form>
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Đối Tượng</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['doituong'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Bác sĩ phụ trách</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['bacsiphutrach'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
			</div>
			<div class="row">
                <div class="col-md-4 ps-3">
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Số Thẻ BHYT</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['sothebhyt'] ?>"  style="width: 350px" required>
                          
                        </div>
                    </form>
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Thời hạn Thẻ BHYT</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['thoihanthe'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Ngày Nhập Viện</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['ngaynhapvien'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
			</div>
			
            <div class="row">
                <div class="col-md-4 ps-3">
                    <form class=" pe-5 ">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Tên Người Nhà</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['tennguoinha'] ?>"  style="width: 350px" required>
                          
                        </div>
                    </form>
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">SĐT người nhà</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['stdnguoinha'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Lý do vào viện</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row1['lydovaovien'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
			</div>
            <div class="row">
                <div class="col-md-4 ps-3">
                    <form class=" pe-5 ">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Quá trình bệnh lý</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row1['quatrinhbenhly'] ?>"  style="width: 350px" required>
                          
                        </div>
                    </form>
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Tiểu sử</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row1['tieusu'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
                  <div class="col-md-4  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Trạng Thái</label>
                          <input readonly type="text" class="form-control " value="<?php echo $row['trangthai'] ?>"  style="width: 350px" required>
                          
                        </div>
                 
                  </div>
			</div>
      <div class="row">
                <div class="col-md-4 ps-3">
                    <form class=" pe-5 ">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Bệnh chính </label>
                          <input readonly type="text" class="form-control " value="<?php echo $row2['benhchinh'] ?>"  style="width: 350px" required>
                          
                        </div>
                    </form>
                  </div>
                  <div class="col-md-8  ">
          
                    <form class=" pe-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label"  style="font-size: 20px;">Hướng điều trị</label>
                          <br>
                          <textarea readonly id="w3review" name="w3review" rows="4" cols="50">
                          <?php echo $row2['huongdieutri'] ?>
</textarea>
                        </div>
                 
                  </div>
                
		</div>
	</div>
</div>

</body>
</div>
</html>