<?php
//1.Zadatak : Kreirati funkciju koja filtrira niz emailova i vraca samo emailove (za email smatrati da je ispravan ako sadrzi @).
echo "<p style='color:red; font-weight: bold;'>Zadatak br.1:</p>";

function arrayMail ($array){
    foreach ($array as $value) {
        if (str_contains($value, "@"))
        echo "$value <br>";
    }
}

//provera
$array = array ('firstname.secondname@domain.com', 'firstname', 'firstname@domain.com', 'firstandlastname', 'firstname.initial@domain.com', 'lastname.initial@domain.com');
arrayMail ($array);
 



//2.Zadatak : Kreirati funkciju koja vrsi racunske operacije svih elemenata prosledjenog niza. 
//Funkcija prima 2 parametra: niz (podrazumevati da je niz brojeva) nad kojim se vrse operacije i karakter za operaciju koji je po defaultu = “+”;

echo "<p style='color:red; font-weight: bold;'>Zadatak br.2:</p>";

function arithmeticOpperations ($num, $operator = "+") {
    $final = $num [0];
    if (($operator == "+") or ($operator == "-") or ($operator == "*") or ($operator == "/")) {
        for ($i=1; $i<count ($num); $i++) {
            if ($operator == "+") {
                $final = $final + $num[$i];
            } else if ($operator == "-") {
                $final = $final - $num[$i];
            } else if ($operator == "*") {
                $final = $final * $num[$i];
            } else if ($operator == "/") {
                $final = $final / $num[$i];
            } 
        } echo $final . "<br>";
    } else {
        die ("You have entered invalid operator! <br>");
    }
}
//provera
$num = array (1, 2, 3, 4);
echo arithmeticOpperations ($num);



//3.Zadatak : Kreirati funkciju koja proverava da li u datom asocijativnom nizu postoji odredjeni kljuc. != array_key_exists().

echo "<p style='color:red; font-weight: bold;'>Zadatak br.3:</p>";

function lookForKey ($array, $keysearch) {
    $x = false;
    foreach ($array as $key => $value){
        if ($key == $keysearch) {
            $x = true;
        } 
    } if ($x == true) {
        echo "The key is found. <br>";
    } else {
        echo "The key is not found. <br>";
    }
}

//provera
$k = array ('name'=> 'Petar', "surname" => "Petrovic", "age"=> 35, "school" => 'college');
echo lookForKey ($k, "gender");