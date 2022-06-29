<?php

session_start();
// PAGE TITLE
$page = "products";

if (!empty($_GET['page'])) {
    $pagPage = $_GET['page'];
} else {
    $pagPage = 1;
}


// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

// USING MODELS
use Models\Product\Product;
use Lib\ShoppingCart\ShoppingCart;

try {
    // GET PRODUCTS
    $products = Product::getAvailableProducts($pagPage);

    // TERM AND SORT
    $term = "";
    $sort = "";
    if (isset($_GET['term']) && !empty($_GET['term'])) {
        $term = strtolower($_GET['term']);
    }
    if (isset($_GET['sort']) && !empty($_GET['sort'])) {
        $sort = $_GET['sort'];
    }
    if ($term != "") {
        $products = Product::filteredProducts($term, $products);
    }
    if ($sort != "") {
        $products = Product::sortProductBy($sort, $products);
    }
    // SHOPPING CART (SESSION)
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $shoppingCart = new ShoppingCart($_SESSION['cart']);
    if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
        $shoppingCart->addToCart(Product::getOneProductById($_POST['product_id']));
        $shoppingCart->updateSession();
    }
} catch (\Throwable $th) {
    //header("Location: ./");
    var_dump($th->getMessage());
    var_dump($th->getFile());
    var_dump($th->getLine());
}
// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-products.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

