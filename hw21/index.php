

<?php

include ('colors.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOJE</title>
</head>
<body>
<?php

$boja = new Colors();
//$boja->insertColor("Beige", "#6507ed", "1");
//$boja->insertColor("DarkGrey", "#728016", "1");
//$boja->insertColor("Salmon", "#acd8e7", "1");
//$boja->insertColor("Linen", "#a4546f", "0");
//$boja->insertColor("LightCoral", "#e1924e", "0");
//$boja->insertColor("LightSkyBlue", "#a70a42","0");
//$boja->insertColor("SeaShell", "#fab686", "0");
//$boja->insertColor("Navy", "2a486c", "0");
//$boja->insertColor("LavenderBlush", "#aaead1", "1");
//$boja->insertColor("LightBlue", "#cdda18", "0");

echo "<b>Data table BOJE has following colors set:</b>";
echo "<br>";
$boja->getSetColors();
echo "<hr>";

//echo "<b>All active colors (status=1), sorted by date created:</b>";
//echo "<br>";
//$boja->getStatus1Created();
//echo "<hr>";

//echo "<b>Any 5 random colors:</b>";
//echo "<br>";
//$boja->get5Random();
//echo "<hr>";

//echo "Insert color:"; //Emerald
//echo "<br>";
//$boja->insertColor("EmeraldGreen", "#50c878", "1");
//$boja->getSetColors();
//echo "<hr>";

//echo "<b>Set inactive colors to active:</b>";
//echo "<br>";
//$boja->setInactive2Active();
//$boja->getSetColors();
//echo "<hr>";

//echo "<b>Set active colors to inactive:</b>";
//echo "<br>";
//$boja->setActive2Inactive();
//$boja->getSetColors();
//echo "<hr>";

//echo "<b>Set colors active by name:</b>";
//echo "<br>";
//echo $boja->setActiveByName("LavenderBlush");
//$boja->getSetColors();
//echo "<hr>";

//echo "<b>Set inactive colors active by name:</b>";
//echo "<br>";
//echo $boja->setActiveByName("Navy");
//echo $boja->setActiveByName("LightBlue");
//echo $boja->setActiveByName("Linen");
//$boja->getSetColors();
//echo "<hr>";

//echo "<b>Delete color from table by ID defined:</b>";
//u zadatku je dato da bude ID=5, 
//ali sam htela da probam dinamicnije resenje
//echo "<br>";
//$boja->deleteByID(5);
//$boja->getSetColors();
//echo "<hr>";

//echo "<b>Delete color from table by the first time inserted changes:</b>";
//echo "<br>";
//echo $boja->deleteByfirstChange();
//$boja->getSetColors();
//echo "<hr>";

?>

</body>
</html>