<?php

class Product {
    public $barcode;
    public $title;
    public $price;
    public $storage;


    public function __construct($barcode, $title, $price, $storage) {
        $this->barcode = $barcode;
        $this->title = $title;
        $this->price = $price;
        $this->storage = $storage;
    }

    public function getBarcode() {
        return $this->barcode;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStorage() {
        return $this->storage;
    }

    public function toString() {
        return $this->barcode;
        return $this->title;
        return $this->price;
        return $this->storage;
    }
}

class ShoppingCartItem {
    protected $cartItem;
    protected $quantity;

    public function setCartItem($product, $quantity) {
        if ($product instanceof Product)
            if (is_numeric($quantity) && $quantity > 0) {
                if ($quantity <= $product->getStorage()) {
                    $this->quantity = $quantity;
                    $this->cartItem = $product;
                } else {
                    echo "There is not enough products in storage to make this purchase!";
                }
            } else {
                echo 'Desired quantity is not valid!';
            }
    }

    public function getCartItem () {
        return $this->cartItem;
    }

    public function getProduct()
    {
        return $this->product;
    }
    public function cartItemBarcode($product) {
        $cartItemBarcode = '';
        if ($this->cartItem = $product) {
            $cartItemBarcode = $product->getBarcode();
        }
        return $cartItemBarcode;
    }

    public function getCartQuantity () {
        return $this->quantity;
    }
}


class ShoppingCart {
    protected $cartItems = [];

    public function addToCart ($cartItem) {
        if ($cartItem instanceof ShoppingCartItem) {
            array_push ($this->cartItems, $cartItem);
        } return $this->cartItems;
    }


}
    

$product1 = new Product("946087244462", "Book1", "25.75", "33");
$product2 = new Product("615125560282", "Book2", "12.25", "15");
$product3 = new Product("315025017718", "Book3", "33.30", "22");
$product4 = new Product("908760326768", "Book4", "8.60", "13");
$product5 = new Product("349987694477", "Book5", "19.85", "5");


$cartItem1 = new ShoppingCartItem ();
$cartItem1->setCartItem($product1, 1);
print_r($cartItem1);
echo "<br>";
$cartItem2 = new ShoppingCartItem ();
$cartItem2->setCartItem($product3, 2);
echo "<br>";
echo $cartItem1->cartItemBarcode($product1);
echo "<br>";
$cartItem3 = new ShoppingCartItem ();
$cartItem3->setCartItem($product3, -3);
var_dump($cartItem3);
echo "<br>";
$cartItem4 = new ShoppingCartItem ();
$cartItem4->setCartItem($product4, 'jsah');
print_r($cartItem3);
echo "<br>";

echo $cartItem1->getCartQuantity();


$cart = new ShoppingCart();
$cart->addToCart($cartItem1);
$cart->addToCart($cartItem2);
echo "<pre>";
var_dump($cart);
echo "</pre>";


?>