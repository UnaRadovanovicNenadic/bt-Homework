<?php
 
$n = $_GET["num"];
$i = 1;
$sum = 0;

if (empty($n)) {
    echo "First you must enter number.";
}

while($i <= $n) {
  $sum += $i;
  $i++;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
</head>

<header><h1>Calculate the sum of natural numbers</h1></header>

<body>

    <div>

        <form action="zadatak3.php" method="GET">
            <p>Insert how many natural numbers you want to summarize:</p>
            <input type="number" name="num" min=1> 
            <input type="submit" value="SUBMIT">
        </form>
    </div>  
    
    <?php
        echo "Sum of chosen natural numbers is: $sum";
    ?>
  

</body>

</html>