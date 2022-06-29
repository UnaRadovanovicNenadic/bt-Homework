<?php

class Product {
    public $barcode;
    public $title;
    public $price;


    public function __construct($barcode, $title, $price) {
        $this->barcode = $barcode;
        $this->title = $title;
        $this->price = $price;
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

    public function toString() {
        return $this->barcode;
        return $this->title;
        return $this->price;
    }
}

class ShoppingCartItem {
    protected $cartItem = [];
    protected $quantity;

    public function setCartItem(Product $product, $quantity) {
        array_push($this->cartItem, $product->getBarcode());
        array_push($this->cartItem, $product->getTitle());
        array_push($this->cartItem, $product->getPrice());
        $this->quantity = $quantity;
        return $this->cartItem;
    }

    public function getCartItem () {
        return $this->cartItem;
    }

    public function getQuantity () {
        return $this->quantity;
    }



}

$product1 = new Product("946087244462", "Book1", "25.75");
$product2 = new Product("615125560282", "Book2", "12.25");
$product3 = new Product("315025017718", "Book3", "33.30");
$product4 = new Product("908760326768", "Book4", "8.60");
$product5 = new Product("349987694477", "Book5", "19.85");


$cartItem1 = new ShoppingCartItem ();
$cartItem1->setCartItem($product1, 1);
echo $cartItem1->getQuantity();
var_dump($cartItem1);
echo $cartItem1->getCartItem();



class ShoppingCartItem {
    protected $product;
    protected $quantity;

    public function setCartItem($product, $quantity) {
        if ($product instanceof Product)
            $this->product = $product;
            $this->quantity = $quantity;
    }

    public function getCartItem () {
        return $this->cartItem;
    }

    public function getQuantity () {
        return $this->quantity;
    }



}

$product1 = new Product("946087244462", "Book1", "25.75");
$product2 = new Product("615125560282", "Book2", "12.25");
$product3 = new Product("315025017718", "Book3", "33.30");
$product4 = new Product("908760326768", "Book4", "8.60");
$product5 = new Product("349987694477", "Book5", "19.85");


$cartItem1 = new ShoppingCartItem ();
$cartItem1->setCartItem($product1, 1);
var_dump($cartItem1);
echo $cartItem1->getQuantity();


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
$cartItem2 = new ShoppingCartItem ();
$cartItem2->setCartItem($product3, 2);


$cart = new ShoppingCart();
$cart->addToCart($cartItem1);
$cart->addToCart($cartItem1);
echo "<pre>";
var_dump($cart);
echo "</pre>";


public function listCartItems() {
    echo "<b>Selected items for cart:</b>";
    foreach ($this->cartItems as $item) {
        print_r($item);
        echo "Product: " . $item[0][1] . " Price: " . $item[0][2].
            "  Quantity: " .  $item[1] . "<br>";
        foreach ($item as $k => $i) {
            // print_r($k . $i);
        }
    }
}