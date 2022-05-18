<?php

//zadatak 1
//Za svako ubacivanje u niz ispitati da li postoji u nizu i ako vec postoji ne dozvoliti da se upise.

echo "<p style='color:red; font-weight: bold;'>Zadatak br.1:</p>";


$hwArray = ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
print_r ($hwArray);
echo "<br>";

//Najpre u ovaj postojeci niz dodati vase ime. 
if (in_array ("Una", $hwArray)) {
    die;
} else {
    array_push ($hwArray, "Una");
}
print_r ($hwArray);
echo "<br>";

//Nakon toga dodati ime vase/g rodjaka/e na trecem mestu u nizu.
if (in_array ("Nikola", $hwArray)) {
    die;
} else {
    array_splice ($hwArray, 2, 0, "Nikola");
}
print_r ($hwArray);
echo "<br>";

//Nakon toga prebrojte koliko ucenika ima
echo "The number of students is " . count ($hwArray) . ".";
echo "<br>";

//Zatim dodati novog clana na pocetak niza
if (in_array ("Milan", $hwArray)) {
    die;
} else {
    array_unshift ($hwArray, "Milan");
}
print_r ($hwArray);
echo "<br>";

//Zatim obrisati Danila iz niza
if (($key = array_search('Danilo', $hwArray)) !== false) {
    unset($hwArray[$key]);
}
print_r ($hwArray);
echo "<br>";

//Zatim skloni sve duplirane clanove niza
print_r (array_unique ($hwArray)); //samo array_unique i print_r niza ne sklanja duplirane clanove
echo "<br>";

//druga verzija za uklanjanje dupliranih clanova moze biti sa pravljenjem nove varijable
$hwArray2 = array_unique ($hwArray);
print_r ($hwArray2);
echo "<br>";
echo "<br>";


//zadatak 2
//Pera Peric ima 28 godina i nije ozenjen. Ima prosecnu ocenu 7.5, a kurseve koje trenutno slusa su: Laravel, PHP, jQuery.
echo "<p style='color:red; font-weight: bold;'>Zadatak br.2:</p>";

$data = array (
    array (
    	"name" => "Pera",
        "last_name" => "Peric",
        "age" => 28,
        "gender" => "male",
        "avg_rating" => 7.5,
        "married" => false,
        "courses" => ["laravel", "react", "jQuery"]
    ),
    array (
    	"name" => "Sanja",
        "last_name" => "Milic",
        "age" => 25,
        "gender" => "female",
        "avg_rating" => 9.,
        "married" => false,
        "courses" => ["laravel", "jQuery"]
    ),
    array (
    	"name" => "Nikola",
        "last_name" => "Nikolic",
        "age" => 35,
        "gender" => "male",
        "avg_rating" => 10,
        "married" => true,
        "courses" => ["PHP" , "Python"]
    ),
    array (
    	"name" => "Katarina",
        "last_name" => "Jovanovic",
        "age" => 28,
        "gender" => "female",
        "avg_rating" => 9.3,
        "married" => true,
        "courses" => ["PHP" , "Python"]
    ),
    array (
    	"name" => "Goran",
        "last_name" => "Petrovic",
        "age" => 37,
        "gender" => "male",
        "avg_rating" => 7.8,
        "married" => false,
        "courses" => ["PHP" , "JavaScript"]
    ),
    array (
    	"name" => "Jelena",
        "last_name" => "Lazic",
        "age" => 36,
        "gender" => "female",
        "avg_rating" => 8.5,
        "married" => true,
        "courses" => ["react" , "jQuery"]
    )
);


foreach ($data as $person) {
    echo $person["name"] . " " . $person["last_name"] . " ima " . $person["age"] . " godina i ";
    if (($person["gender"] == "female") && ($person["married"] == false)) {
        echo "nije udata";
    } else if (($person["gender"] == "female") && ($person["married"] == true)) {
        echo "udata je";
    } else if (($person["gender"] == "male") && ($person["married"] == false)) {
        echo "nije ozenjen";
    } else {
        echo "ozenjen je";
    }
    echo ". Ima prosecnu ocenu " . $person["avg_rating"] . ", a kursevi koje trenutno slusa su: " . implode(", " , $person["courses"]) . ". <br>";
}


?>