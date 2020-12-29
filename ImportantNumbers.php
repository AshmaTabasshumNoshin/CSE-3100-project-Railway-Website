<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php" ?>
<?php include "includes/db.php";?>

<h1>

Important Number

</h1>

<?php


$sql = "SELECT station_name,mobile_no FROM imp_num";
$result = $con->query($sql) or die($con->error);


echo "<center><table class='table' style='margin-top:1rem;'><thead class='thead-dark'><tr><th>Staion Name</th><th>Phone Number</th></tr><thead>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["station_name"]. "</td>
        <td>" . $row["mobile_no"]. "</td>
        </tr>";
    }

echo "</table></center>";



$con->close();
?>


<?php include "includes/footer.php"?>