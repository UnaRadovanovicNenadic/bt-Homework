<?php

echo "<br>";

if (empty($_GET)) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    You have to enter input parameters.<br></p>");
}

if (empty($_GET["day"])) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    You have to enter day number.<br></p>");
}

if (empty($_GET["month"])) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    You have to enter month number.<br></p>");
}

if (empty($_GET["year"])) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    You have to enter year number.<br></p>");
}

if (!is_numeric($_GET["day"])) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Day entry must be a number.<br></p>");
} 

if (!is_numeric($_GET["month"])){
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Month entry must be a number.<br></p>");
} 

if (!is_numeric($_GET["year"])) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Year entry must be a number.<br></p>");
} 


if (($_GET["day"] <= 0) or ($_GET["day"] > 31)) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Day entry must be a number between 1 and 31.<br></p>");
}

if (($_GET["month"] <= 0) or ($_GET["month"] > 12)) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Month entry must be a number between 1 and 12.<br></p>");
}

if ($_GET["year"] <= 0) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Year entry must be a number larger than 0.<br></p>");
}

$day = $_GET["day"] + 0; //dodajem 0 zbog konverzije stringa u broj
$month = $_GET["month"] + 0;
$year = $_GET["year"] + 0;
$date = true;

if (is_float($day)) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Day entry must be a whole number.<br></p>");
}

if (is_float($month)) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Month entry must be a whole number.<br></p>");
} 

if (is_float($year)) {
    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
    Year entry must be a whole number.<br></p>");
} 

function nameMonth ($month) {
    if ($month == 1) {
        echo "January";
    } else if ($month == 2) {
        echo "February";
    } else if ($month == 3) {
        echo "March";
    } else if ($month == 4) {
        echo "April";
    } else if ($month == 5) {
        echo "May";
    } else if ($month == 6) {
        echo "June";
    } else if ($month == 7) {
        echo "July";
    } else if ($month == 8) {
        echo "August";
    } else if ($month == 9) {
        echo "September";
    } else if ($month == 10) {
        echo "October";
    } else if ($month == 11) {
        echo "November";
    } else if ($month == 12){
        echo "December";
    }     
}



function dateAccuracy ($day, $month, $year) {
        if ($month == 2) {
                if ($year % 4 !==0  && $day > 28) {
                    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
                    You have entered day " . $day . " and year " . $year. ", which is not a leap year, thus February has maximum 28 days. 
                    Entered date is not accurate! Try again.<br></p>");
                } else if ($year % 4 == 0 && $day > 29) {
                    $date = false;
                    die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
                    You have entered day " . $day . " and year " . $year. ", which is a leap year, thus February has maximum 29 days. 
                    Entered date is not accurate! Try again.<br></center></p>");
                } else {
                    $date = true;
                    return ("<p style='color:green; text-align:center; font-family: Courier New; font-weight: bold; '>
                    Your entered date " . $day . "." . $month . "." . $year . ". is accurate!<br></p>");
                }
        } else if ($month == 4 or $month == 6 or $month == 9 or $month == 11) {
                $day == 31;
                $date = false;
                die ("<p style='color:red; text-align:center; font-family: Times New Roman; font-weight: bold;'>
                " . nameMonth($month) . " has only 30 days. Entered date is not accurate! Try again.<br></p>");
        } else {
            echo "<p style='color:green; text-align:center; font-family: Courier New; font-weight: bold; '>
            Your entered date " . $day . "." . $month . "." . $year . ". is accurate!<br></p>";
        }
    }        


echo dateAccuracy($day, $month, $year);

?>