

<?php
    include("dbConfig.php");
    $a=$_POST['data'];
    
        $query = "SELECT * FROM benhnhan where mabn LIKE '$a%'  ";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    
                $mabn = $row['mabn'];
               
                
    ?>

<p class=" "> 
                      
<a href="ctchiso.php?id=<?php echo $mabn; ?>" class="text-decoration-none text-black "><?php echo $mabn  ?> </a>
</p> 




             
             <?php }
             }
             ?>


