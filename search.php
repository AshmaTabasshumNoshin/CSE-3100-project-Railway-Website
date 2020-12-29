<?php include "includes/db.php" ?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php" ?>



<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($con,$query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($con,"SELECT * FROM payment
            WHERE (`sfrom` LIKE '%".$query."%') OR (`sto` LIKE '%".$query."%')") or die(mysqli_error($con));
             
        // * means that it selects all fields, you can also write: `id`, `From`, `To`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `From`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysqli_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            echo "<div class='container' id='searchResult'><h3> From:".$results['sfrom'].'<br> <h3>To:'.$results['sto'].'</h3><br>Total Distance:'.$results['Distance'].'<br>Ticket price(Shovon Chair):'.$results['ShovonChair'].'<br>Ticket price(Ac):'.$results['AC'].'<br></div>';
                // posts results gotten from database(From and To) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>

<?php include "includes/footer.php" ?>