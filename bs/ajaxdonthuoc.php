<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:loginbs.php");
}
$mabs=$_SESSION['LoginOK'];
    include("dbConfig.php");
    $a1=$_POST['data1'];
    
        $query = "SELECT * FROM benhnhan where mabn LIKE '$a1%' and bacsiphutrach='$mabs'  ";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    
                $mabn = $row['mabn'];
               
                
    ?>

<p class=" "> 
                      
<a href="CTdonthuoc.php?id=<?php echo $mabn; ?>" class="text-decoration-none text-black "><?php echo $mabn ?> </a>
</p> 




             
             <?php }
             }
             else {
                ?>
             <h6 class='text-danger text-center mt-3'>Không tìm thấy mã bệnh nhân </h6>
               <?php
           }
             ?>