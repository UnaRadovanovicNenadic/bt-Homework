<?php

echo "<br>";

if (empty($_GET["total_fuel"])) {
    die ("<p style='color:red; text-align:center; font-family: Courier New; font-weight: bold; '>
    Total fuel available is required!</p>");
}

if (empty($_GET["truck_fuel"])) {
    die ("<p style='color:red; text-align:center; font-family: Courier New; font-weight: bold; '>
    Expected truck fuel consumption is required!</p>");
}

if (!is_numeric($_GET["total_fuel"])) {
    die ("<p style='color:red; text-align:center; font-family: Courier New; font-weight: bold; '>
    Total fuel availble must be a number!</p>");
}

if (!is_numeric($_GET["truck_fuel"])) {
    die ("<p style='color:red; text-align:center; font-family: Courier New; font-weight: bold; '>
    Expected truck fuel consumption must be a number!</p>");
}

if ($_GET["total_fuel"] <= 0) {
    die ("<p style='color:red; text-align:center; font-family: Courier New; font-weight: bold; '>
    Total fuel availbale must be a number larger than 0!</p>");
}

if ($_GET["truck_fuel"] <= 0) {
    die ("<p style='color:red; text-align:center; font-family: Courier New; font-weight: bold; '>
    Expected truck fuel consumption must be a number larger than 0!</p>");
}

if (!isset($_GET["rest_fuel"])) {
    $_GET["rest_fuel"] = false;
}

$totalFuel = $_GET["total_fuel"] + 0;
$truckFuel = $_GET["truck_fuel"] + 0;
$restFuelFlag = $_GET["rest_fuel"];


function calcTrucksFuel ($totalFuel, $truckFuel, $restFuelFlag = false) {
    $truck = $totalFuel / $truckFuel;
    $rest = $totalFuel % $truckFuel;
        if ($restFuelFlag) {
            echo "<p style='color:green; text-align:center; font-family: Courier New; font-weight: bold; '>
            Calculated remaining of the fuel is: " . $rest . " l.</p>";
            } else {
            echo "<p style='color:green; text-align:center; font-family: Courier New; font-weight: bold; '>
            The number of truck(s) that will reach destination is: " . floor($truck) . ".</p>";
            }
    }


echo calcTrucksFuel ($totalFuel, $truckFuel, $restFuelFlag);

?>