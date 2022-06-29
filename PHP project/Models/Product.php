<?php

namespace Models\Product;

use Models\Model\Model;

class Product extends Model
{
    const ORDER_BY_PRICE_ASC = 'price-asc';
    const ORDER_BY_PRICE_DESC = 'price-desc';
    
    public $id;
    public $title;
    public $description;
    public $status;
    public $price;
    public $category;
    public $img;
    public $type;
    public $stock;
    public $sold;
    public $barcode;
    public $author;

    public function __construct($product) {
        $this->id = $product['id'];
        $this->title = $product['title'];
        $this->description = $product['description'];
        $this->author = $product['author'];
        $this->status = $product['status'];
        $this->price = $product['price'];
        $this->category = $product['category'];
        $this->type = $product['type'];
        $this->barcode = $product['barcode'];
        $this->img = $product['img'];
        $this->stock = $product['stock'];
        $this->sold = $product['sold'];
    }

    public static function getAllProducts() {
        parent::connection('sepca_products');
        $allProducts = [];
        if (self::$db_status) {
            foreach (parent::fetchAll() as $product) {
                $allProducts[] = new self($product);
            }
        }
        return $allProducts;
    }

    public static function getAvailableProducts($page = null) {
        $availabaleProducts = [];
        foreach (self::getAllProducts() as $product) {
            if ($product->status == 1) {
                $availabaleProducts[] = $product;
            }
        }
        return $availabaleProducts;
    }

    public static function getOneProductById($id) {
        $products = self::getAvailableProducts();
        foreach ($products as $product) {
            if ($product->id == $id) {
                return $product;
            }
        }
    }

    public static function filteredProducts($term, $products = []) {
        $filteredProducts = [];
        $products = !empty($products) ? $products : self::getAvailableProducts();
        foreach ($products as $product) {
            if (str_contains(strtolower($product->title), $term) or 
            str_contains(strtolower($product->author), $term) or
            str_contains(strtolower($product->category), $term) or
            str_contains(strtolower($product->type), $term)) {
                $filteredProducts[] = $product;
            }
        }
        return $filteredProducts;
    }

    public static function sortProductBy($sortBy, $products = []) {
        $products = !empty($products) ? $products : self::getAvailableProducts();
        switch ($sortBy) {
            case self::ORDER_BY_PRICE_ASC:
                usort($products, function ($item1, $item2) {
                    return $item1->price > $item2->price;
                });
                break;
            case self::ORDER_BY_PRICE_DESC:
                usort($products, function ($item1, $item2) {
                    return $item1->price < $item2->price;
                });
                break;
            default:
                break;
        }
        return $products;
    }

    public static function getThreeRandomProducts() {
        $randProd = [];
        foreach (self::getAvailableProducts() as $product) {
            if (count($randProd) >= 3) {
                break;
            }
            $randProd[] = $product;
        }
        return $randProd;
    }


    public static function getMostSold() {
        $mostSold = [];
        $products = self::getAvailableProducts();
        $max = $products[0];
        foreach ($products as $product) {
            if ($product->sold > $max->sold && $max->id != $product->id) {
                $mostSold[] = $product;
                if (count($mostSold) >= 3) {
                    break;
                }
            }
        }
        return $mostSold;
    }

    public function getRelatedProducs() {
        $related = [];
        $products = self::getAvailableProducts();
        foreach ($products as  $product) {
            if ($product->category == $this->category && $this->id != $product->id) {
                $related[] = $product;
                if (count($related) >= 3) {
                    break;
                }
            }
        }
        return $related;
    }

    public function getPrevProductId() {
        $products = self::getAvailableProducts();
        foreach ($products as $key => $product) {
            if ($product->id == $this->id) {
                if ($key == 0) {
                    return $products[count($products) - 1]->id;
                } else {
                    return $products[$key - 1]->id;
                }
            }
        }
    }

    public function getNextProductId() {
        $products = self::getAvailableProducts();
        foreach ($products as $key => $product) {
            if ($product->id == $this->id) {
                if ($key == (count($products) - 1)) {
                    return $products[0]->id;
                } else {
                    return $products[$key + 1]->id;
                }
            }
        }
    }
}
