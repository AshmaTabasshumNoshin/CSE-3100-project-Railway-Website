<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

 <nav class="navbar navbar-expand-sm bg-light navbar-dark">
 
  <form class="form-inline my-2 my-lg-0" action="TrainTimeTableResult.php" method="GET">
      <input class="form-control mr-sm-2" type="text" placeholder="From" name="query1">
      <input class="form-control mr-sm-2" type="text" placeholder="To" aria-label="Search" name="query2">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav> 

<?php


$sql = "SELECT sfrom, sto, sname, StartingTime, ReachedTime FROM TrainTracking";
$result = $con->query($sql) or die($con->error);


echo "<center><table class='table' style='margin-top:1rem;'><thead class='thead-dark'><tr><th>Name</th><th>From</th><th>To</th><th>Starting Time</th><th>Arriving Time</th></tr><thead>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["sname"]. "</td><td>" . $row["sfrom"]. "</td><td> " . $row["sto"]. "</td><td> " . $row["StartingTime"]. "</td><td> " . $row["ReachedTime"]. "</td></tr>";
    }

echo "</table></center>";


/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. "<br> From:" . $row["From"]. "<br> To:". $row["From"];
    }
} else {
    echo "0 results";
}*/
$con->close();
?>


<?php include "includes/footer.php"?>

