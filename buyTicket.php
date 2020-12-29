<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php" ?>

<head>
<link rel="stylesheet" type="text/css" href="css/formStyle.css">
</head>

<h1>

Purchase Ticket

</h1>
<div id="center">
<form action="buyTicketResult.php" method="POST">
    <table width="500" border-collapse="collapse">
    <tr>
    <td align="left">        Station From  </td>
    <td align="right">        <select name="sfrom">
            <option> Select Station </option> 
                <?php
                    $sql = mysqli_query($con, "SELECT DISTANT sfrom FROM payment;");
                    while($row = mysqli_fetch_array($sql)){
                        echo "<option value= ".$row['sfrom'] .">". $row['sfrom']. "</option>";     
                    }
                ?> 
            </select>   </td>
        </tr>
    <tr>      
     <td align="left">       Station To </td>
     <td align="right">       <select name="sto">
            <option> Select Station </option> 
                <?php
                    $sql = mysqli_query($con, "SELECT DISTANT sto FROM payment;");
                    while($row = mysqli_fetch_array($sql)){
                        echo "<option value= ".$row['sto'] .">". $row['sto']. "</option>";     
                    }
                ?> 
            </select>   </td>
            </tr>
        <tr>
        <td align="left">    Journey Date </td>
        <td align="right">    <select name="date">
                <?php
                    $mondayTimestamp = strtotime('date("d m y")');
                    $output = [];
                    for ($day = 0; $day < 7; $day++) {
                        $output[] = date('d M y', strtotime(sprintf('+%d days', $day), $mondayTimestamp));
                    }
                    foreach ($output as $day) : ?>
                    <option value="<?php echo $day ?>"><?php echo $day ?></option>
                <?php endforeach; ?>
            </select> </td> 
            </tr>
            <tr>
         <td align="left">   Class  </td>
        <td align="right">    <select name="class">
                <option>Select Class</option>
                <option value="ac"> AC </option>
                <option value="shovon"> Shovon Chair </option>
            </select>
            </td> </tr>

        </table>
        <br><br>
            <button type="submit" name="submit"> Confirm </button>
</form>
</div>

<?php include "includes/footer.php"?>