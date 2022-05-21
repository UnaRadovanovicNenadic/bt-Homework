<?php

//Zadatak kaze: "Korisnici se pretrazuju ili po imenu ili po prezimenu." 
//kako kad pretrazuje i ime i prezime (&&) i ime ili prezime (or) brise sve... =>
//uvela sam parametar za pretragu $searchParameter gde moze da se unese "name" ili "last_name' jer nemamo formu... 

function search_users (array $array, string $searchParameter = "", string $searchContent = "") : array { 
    foreach ($array as $key => $value) {
        if (strpos($value[$searchParameter], $searchContent) === false) {
            unset($array [$key]);
        } 
} return $array;
}

$users = array (
    array (
        'name' => 'Pera',
        'last_name' => 'Miric',
        'img' => '...'
    ),
    array (
        'name' => "Nikola",
        'last_name' => 'Nenadic',
        'img' => '...'
    ),
    array (
        'name' => "Zoran",
        'last_name' => 'Celap',
        'img' => '...'
    ),
    array (
        'name' => "Nemanja",
        'last_name' => 'Jovic',
        'img' => '...'
    ),
    array (
        'name'=> 'Mitar',
        'last_name' => 'Miric',
        'img' => '...'
    )
    );

print_r (search_users ($users, "name", "Pera"));
echo "<br>";
print_r (search_users ($users, "last_name", "ic"));
echo "<br>";
print_r (search_users ($users, "name", "ashjgds"));
echo "<br>";
print_r (search_users ($users, "last_name", "ashjgds"));

?>
