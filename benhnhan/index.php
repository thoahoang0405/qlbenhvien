
<?php 
session_start();
 $conn =mysqli_connect('localhost','root','','benhvien');
    if(!$conn){
        die("kết nối thất bại!");
    };
                    $mabn = $_SESSION['LoginOK'];
                    $query = "SELECT * FROM benhnhan WHERE mabn='$mabn' ";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }
                    mysqli_close($conn);
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href=".././assets/css/benhnhan_index.css">
</head>
<body  style ="background-color: rgba(192, 243, 252, 0.521)" >
<div id="luachon" class="container">
    <h1 class="text-center mt-5">THÔNG TIN MUỐN TRA CỨU</h1>
    <div class="row mt-3">
        <div class="col-md-6">          
            <button type="button" class="btn btn-outline-info">
            <a href="xem_benh_an.php?id=<?php echo $row['mabn']; ?> "class="mc">Xem Bệnh Án</a>
                
                <img src="../assets/img/benhan.jpg" style="height:500px ;width: 300px;" class="img-thumbnail" alt="...">
            </button>
        </div>
        <div class="col-md-6"> 
            <button type="button" class="btn btn-outline-info" name="txtLogin">
                <a href="don_thuoc.php?id=<?php echo $row['mabn']; ?>" class="mc">Đơn Thuốc</a>
                <img src="../assets/img/donthuoc.jpg" style="height:500px;width: 300px;" class="img-thumbnail" alt="...">
            </button>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>
</body>