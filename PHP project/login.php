<?php


session_start();

if (!empty($_SESSION['user'])) {
    header ('Location: ./profile.php');
}

// PAGE TITLE
$page = 'login';

if (!empty($_GET['page'])) {
    $pagPage = $_GET['page'];
} else {
    $pagPage = 1;
}

// REQUIRE CLASSES
require_once __DIR__ . "/Models/Model.php";
require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Lib/ShoppingCart.php";
require_once __DIR__ . "/Lib/ShoppingCartItem.php";

// USING MODELS
use Models\Product\Product;
use Models\Model\Model;

use Lib\ShoppingCart\ShoppingCart;

$systemErrors = [];
$email = '';
$password = '';
$user_pass = '';



try {
    
    // VALIDACIJA KONTAKTA
    if(isset($_POST['login']) && !empty($_POST['login']) && ($_POST['login'] == "yes")) {

    
    // EMAIL
    $email = (string) $_POST['email'];
    $email = trim($email);
    if(empty($email)) {
    $systemErrors['email'] = "Field email is required!";
    }
    if(str_contains($email, " ")) {
    $systemErrors['email'] = "Mail can not include empty spaces!";
    }
    if(empty($systemErrors['email']) && !str_contains($email, "@")) {
    $systemErrors['email'] = "Mail must include @!";
    }


    //PASSWORD
    $loginpassword = (string) $_POST['password'];
    $loginpassword = trim($loginpassword);
    if(empty($loginpassword)) {
        $systemErrors['password'] = "Field password is required!";
    }
    if(strlen($loginpassword) <= 7) {
        $systemErrors['password'] = "Password must have more than 7 characters!";
    }
    if(!preg_match('/[A-Z]/', $loginpassword)) {
        $systemErrors['password'] = "Password must have at least one upper case letter!";
    }
    if(!preg_match('/[0-9]/', $loginpassword)) {
        $systemErrors['password'] = "Password must have at least one number!";
    }
    $user_pass = $logginpassword;
    var_dump($loginpassword);
    
    //DATABASE ENTRY
    if(empty($systemErrors)) {
        /* * * mysql hostname ** */
        $hostname = "localhost";
        /* * * mysql username ** */
        $username = "root";
        /* * * mysql password ** */
        $password = "";
        /* * * mysql database name ** */
        $database = "bookshop";
        try {
            $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM user WHERE email=?";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC); //za proveravanje da li imamo to u redu
            var_dump($loginpassword);
            var_dump($row['password']);
            var_dump(password_hash($loginpassword, PASSWORD_DEFAULT));
            if(password_verify($loginpassword, $row['password'])) {
                $_SESSION['user'] = ['email' => $email];
                header('Location: ./profile.php');

            } else {
                echo "nije ispravan";
            }


            } catch (PDOException $exception) {
            echo "Something went wrong: " . $exception->getMessage() . "<br>";
        }        header('Location: ./profile.php');
    }
    
    }
 
} catch (\Throwable $th) {
    $_SESSION['user'] = [];
    //var_dump($th->getMessage());
    //var_dump($th->getFile());
    //var_dump($th->getLine());
header("Location: ./page-not-found.php");
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-login.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>