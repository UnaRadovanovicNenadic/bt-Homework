<?php


// prilikom pozivanja funkcija sam stavila iste vrednosti kako bi se u display-u lako videlo da li ima greske u racunici
// round-ovala sam povrsine na 2 decimalna mesta jer je bilo nepregledno



function areaRectangle ($a, $b) { //funkcija za povrsinu pravougaonog bazena
    return round (( $a * $b ), 2, PHP_ROUND_HALF_UP);
}
echo "Rectangle shaped pool area calculated through equations: " . areaRectangle (7, 4) . " m<sup>2</sup>.<br>";


function areaCircle ($r) { //funkcija za povrsinu kruznog bazena
// uvodim r kao poluprecnik pod pretpostavkom da r != b / 2
    return round (( pi () * sqrt ($r) / 2 ), 2, PHP_ROUND_HALF_UP);
}
echo "Circle shaped poll area calculated through equations: " . areaCircle (2) . " m<sup>2</sup>.<br>";


//povrsina kombinovanog bazena 1
function areaCombinationVol1 ($x, $y) {
// funkcija za povrsinu bazena u koju ulazi i pravougaonik i polukrug
// nove varijable pod pretpostvakom da se unose nove vrednosti za a i b
// pretpostavka da se povrsina polukruga moze racunati kao r = b / 2 zato je poluprecnik y / 2 
    return round (( (($x * $y) + (((pi() * sqrt ($y / 2)) / 2) / 2)) ), 2, PHP_ROUND_HALF_UP);
}
echo "Rectangle and half-circle combination shaped pool area (version 1) is: " . areaCombinationVol1 (7, 4) . " m<sup>2</sup>.<br>";

        //ZBIR POVRSINA // za ovaj ugao gledanja 
        function addThreeAreasVol1 ($a, $b, $r, $x, $y) {//funkcija za zbir povrsina tri bazena sa razlicitim ulaznim parametrima
            return round (( areaRectangle($a, $b) + areaCircle ($r) + areaCombinationVol1 ($x, $y) ), 2, PHP_ROUND_HALF_UP);
        }
        echo "First version of sum of three pool areas calculated through functions is: " . addThreeAreasVol1 (7, 4, 2, 7, 4) . " m<sup>2</sup>.<br>";


//povrsina kombinovanog bazena 2
function areaCombinationVol2 ($a, $b, $r) {
    // funkcija za povrsinu bazena u koju ulazi i pravougaonik i polukrug
    // ovoga puta poluprecnik kruga moze biti manji ili veci od b / 2
    // odnosno polovina kruznog bazena se dodaje na pravougaoni, bez obzira na njihov odnos (dalo ideju za vezbanje malo komplikovanijih matematickih funkcija)
        return round ( ((areaRectangle($a, $b)) + ((areaCircle ($r) / 2)) ), 2, PHP_ROUND_HALF_UP);
}
echo "Rectangle and half-circle combination shaped pool area (version 2) is: " . areaCombinationVol2 (7, 4, 2) . " m<sup>2</sup>.<br>";

        //ZBIR POVRSINA // za slucaj da se primenjuje prethodno za treci bazen, zbir povsina sva tri bazena mozemo izracunati na sledeci nacin
        // u ovom slucaju pozivamo zasebne funkcije 
        function addThreeAreasVol2 ($a, $b, $r) {
            return round ( (areaRectangle ($a, $b) + areaCircle ($r) + areaCombinationVol2 ($a, $b, $r) ), 2, PHP_ROUND_HALF_UP);
        }    
        echo "Second version of sum of three pool areas calculated through functions is: " . addThreeAreasVol2 (7, 4, 2) . " m<sup>2</sup>.<br>";

        // jos jedan nacin 


//ZBIR POVRSINA BAZENA AKO je za sva tri bazena ista vrednost za a i b
// i pod pretpostavkom da je r = b / 2 
function areaFromB ($b) {
    return pi () * sqrt ($b / 2) / 2;
}

function addThreeAreasVol3 ($a, $b) {
    return round (( ( 2 * ($a * $b)) + ((3 * areaFromB($b)) / 2)), 2, PHP_ROUND_HALF_UP);
}
echo "Third version of sum of three pool areas calculated through equation is: " . addThreeAreasVol3 (7, 4) . " m<sup>2</sup>.<br>"; 

?>