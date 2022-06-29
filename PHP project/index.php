
<?php

session_start();
// PAGE TITLE
$page = 'index';

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


// GET PRODUCTS
$products = Product::getAvailableProducts($pagPage);

try {
    $mostSold = Product::getMostSold();
} catch (\Throwable $th) {
    //var_dump($th->getMessage());
    //var_dump($th->getFile());
    //var_dump($th->getLine());
}

try {
    $mostProducts = Product::getThreeRandomProducts();
} catch (\Throwable $th) {
    die("ERROR");
}

try {
    // GET ONE PRODUCT AND RELATED
    if (!empty($_GET['product'])) {
        $product = Product::getOneProductById($_GET['product']);
        $relatedProducts = $product->getRelatedProducs();
    }

    // SHOPPING CART (SESSION)
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $shoppingCart = new ShoppingCart($_SESSION['cart']);
    if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
        if(isset($_POST['quantity']) && is_numeric($_POST['quantity']) && $_POST['quantity'] > 0) {
            $shoppingCart->addToCart(Product::getOneProductById($_POST['product_id']), $_POST['quantity']);
            $shoppingCart->updateSession();
        } else {
            $systemErrors['quantity'] = "Not valid Quantity";
        }
    }
} catch (\Throwable $th) {
    header("Location: ./page-not-found.php");
    //var_dump($th->getMessage());
    //var_dump($th->getFile());
    //var_dump($th->getLine());
}



// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-index.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>

    