<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php" ?>


<h1>

Purchase Information

</h1>
<?php
    $sfrom = $_POST['sfrom'];
    $sto = $_POST['sto'];
    $date = $_POST['date'];
    $class = $_POST['class'];

    
    $sql = "SELECT AC FROM payment WHERE sto='".$sto. "'AND sfrom='".$sfrom."';";
    $result = $con->query($sql) or die($con->error);


echo "<center><table id='table' style='margin-top:1rem;'><tr><th>Station From</th><th>Station To</th><th>Date</th><th>Class</th>";


        echo "<tr>
        <td>" . $sfrom. "</td>`1    XCGBM.;/'
        QAEFBJLBGGG 
        <td>" . $sto. "</td>
        <td>" . $date ."</td>
        <td>" . $class. "</td></tr>";

    

echo "</table></center>";
echo "<h3>Purchased Successfully!!!</h3>";   


    //mysqli_query($con, $sql);
    
    //header("Location: indexnew.php?addBook=success");

    

    ?>

<?php include "includes/footer.php"?>