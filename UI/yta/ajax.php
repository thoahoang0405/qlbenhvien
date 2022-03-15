<?php
include("dbConfig.php");
$a = $_POST['data'];
$query = "SELECT * FROM benhnhan where mabn LIKE '$a%'  ";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

                $mabn = $row['mabn'];

?>

                <p class=" ">

                        <a href="ctbenhan.php?id=<?php echo $row['mabn']; ?>" class="text-decoration-none text-black "><?php echo $mabn ?></a>
                </p>
<?php }
}
?>