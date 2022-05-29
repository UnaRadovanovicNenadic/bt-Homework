<?php

require_once __DIR__ . "/models/model-all-products.php";


$page = 131;

if(!empty($_GET['stranica'])) {
    $productId = $_GET['stranica'];
}

$product = getOneProductById($productId);
$relatedProducts = getRelatedProducs($product);

$quantity = 1;

if(!empty($_GET['quant'])) {
    $quantity = $_GET['quant'];
}



// HEADER
require __DIR__ . "/views/_layout/view-head.php";

// PAGE
require __DIR__ . "/views/view-checkout.php";

// FOOTER
require __DIR__ . "/views/_layout/view-foot.php";


?>
