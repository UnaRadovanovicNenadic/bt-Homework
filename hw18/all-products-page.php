<?php

require_once __DIR__ . "/models/model-all-products.php";

$products = getAvailableProducts ();
$sort = '';
$filter = '';

if ( ! empty( $_GET['term'] ) ) {
	$products = getProductsByTerm( $_GET['term'] );
} else {
	$products = getAllProducts();
}

$sort = '';
if ( ! empty( $_GET['sort'] ) ) {
	$sort = $_GET['sort'];
}

if ($sort == 'price-asc') {
	$products = sortAsc($products);
} elseif ($sort == 'price-desc') {
	$products = sortDesc($products);
}

// HEADER
require __DIR__ . "/views/_layout/view-head.php";

// PAGE
require __DIR__ . "/views/view-all.php";

// FOOTER
require __DIR__ . "/views/_layout/view-foot.php";


?>
