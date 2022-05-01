<?php



$wall_par = $_GET["wall_par"];

$wall_width = $_GET["wall_w"];

$wall_height = $_GET["wall_h"];

echo "Your area is " . $wall_width . " " . $wall_par . " in width and " . $wall_height . " " . $wall_par . " in height.";
echo "<br>";


$tile_par = $_GET["tile_par"];

$tile_width = $_GET["tile_w"];

$tile_height = $_GET["tile_h"];

echo "Your tiles are " . $tile_width . " " . $tile_par . " in width and " . $tile_height . " " . $tile_par . " in height.";
echo "<br>";


if (($wall_par == "m") && ($tile_par == "cm")) {
    $wall_width = $wall_width*100;
}

if (($wall_par == "m") && ($tile_par == "in")) {
    $wall_width = $wall_width*39.3701;
}


if (($wall_par == "ft") && ($tile_par == "cm")) {
    $wall_width = $wall_width*30.48;
}

if (($wall_par == "ft") && ($tile_par == "in")) {
    $wall_width = $wall_width*12;
}

if (($wall_par == "m") && ($tile_par == "cm")) {
    $wall_height = $wall_height*100;
}

if (($wall_par == "m") && ($tile_par == "in")) {
    $wall_height = $wall_height*39.3701;
}

if (($wall_par == "ft") && ($tile_par == "cm")) {
    $wall_height = $wall_height*30.48;
}

if (($wall_par == "ft") && ($tile_par == "in")) {
    $wall_height = $wall_height*12;
}


$no_width = $wall_width / $tile_width;
$no_height = $wall_height / $tile_height;
$no_tiles = $no_width * $no_height;

function round_up($no_tiles, $precision = 0)
{
    $fig = (int) str_pad('1', $precision, '0');
    return (ceil($no_tiles * $fig) / $fig);
}

$tiles = round_up ($no_tiles);

echo "The number of needed tiles is " . $tiles . ".";

?>

