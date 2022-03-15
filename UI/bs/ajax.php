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

            <a href="./ctchiso.php?id=<?php echo $mabn; ?>" class="text-decoration-none text-black "><?php echo $mabn  ?> </a>
        </p>





    <?php }
} else {
    ?>
    <h6 class='text-danger text-center mt-3'>Không tìm thấy mã bệnh nhân </h6>
<?php
}
?>