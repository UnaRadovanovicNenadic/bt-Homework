
<?php

session_start();
// PAGE TITLE
$page = 'about';

if (!empty($_GET['page'])) {
    $pagPage = $_GET['page'];
} else {
    $pagPage = 1;
}

require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

// USING MODELS
use Models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;


// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-about.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>