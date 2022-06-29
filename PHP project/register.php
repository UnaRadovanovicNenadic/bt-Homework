<?php


session_start();

// PAGE TITLE
$page = 'register';

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
use Models\User;
use Lib\ShoppingCart\ShoppingCart;

$systemErrors = [];
$name = '';
$last_name = '';
$password = '';
$re_password = '';
$email = '';
$age = '';
$gender = '';


try {
    // VALIDACIJA KONTAKTA
    if(isset($_POST['register']) && !empty($_POST['register']) && ($_POST['register'] == "yes")) {

    // NAME
    $name = (string) $_POST['name'];
    $name = trim($name);
    if(empty($name)) {
        $systemErrors['name'] = "Field name is required!";
    }
    
    // LAST NAME
    $last_name = (string) $_POST['last_name'];
    $last_name = trim($last_name);
    if(empty($last_name)) {
        $systemErrors['last_name'] = "Field last name is required!";
    }

    //PASSWORD
    $registerpassword = (string) $_POST['password'];
    $registerpassword = trim($registerpassword);
    if(empty($registerpassword)) {
        $systemErrors['password'] = "Field password is required!";
    }
    if(strlen($registerpassword) <= 7) {
        $systemErrors['password'] = "Password must have more than 7 characters!";
    }
    if(!preg_match('/[A-Z]/', $registerpassword)) {
        $systemErrors['password'] = "Password must have at least one upper case letter!";
    }
    if(!preg_match('/[0-9]/', $registerpassword)) {
        $systemErrors['password'] = "Password must have at least one number!";
    }

    //RE-RASSWORD
    $re_password = (string) $_POST['re_password'];
    $re_password= trim($re_password);
    if(empty($re_password)) {
        $systemErrors['re_password'] = "Field re-type password is required!";
    }
    if(strlen($re_password) <= 7) {
        $systemErrors['re_password'] = "Re-typed password must have more than 7 characters!";
    }
    if(!preg_match('/[A-Z]/', $re_password)) {
        $systemErrors['re_password'] = "Re-typed password must have at least one upper case letter!";
    }
    if(!preg_match('/[0-9]/', $re_password)) {
        $systemErrors['re_password'] = "Re-typed password must have at least one number!";
    }
    if ($registerpassword !== $re_password) {
        $systemErrors['re_password'] = "Re-typed password must must match password!";
    }

    
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


    //AGE
    $age = (string) $_POST['age'];
    $age = trim($age);
    if(!is_numeric($age)) {
        $systemErrors['age'] = "Field age can contain only numbers!";
    }
    if($age <= 0 ) {
        $systemErrors['age'] = "Field age must be positive number!";
    }
    if(empty($age)) {
        $systemErrors['age'] = "Field age is required!";
    }
    if(empty($systemErrors['age']) && false) {
        $systemErrors['age'] = "Age is not valid!";
    }


    //GENDER
    if (!empty($_POST['gender'])) {
        $gender = (string) $_POST['gender'];
        }
    if(empty($gender)) {
        $systemErrors['gender'] = "You haven't selected gender!";
    }

    
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

            $passwordHash = password_hash($registerpassword, PASSWORD_DEFAULT);

            $sql = "SELECT count(email) AS num FROM user WHERE email LIKE :email;";
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC); //za proveravanje da li imamo to u redu
            if ($row["num"] > 0) {
                die ("That username already exists");
            }
                $sqlQueryString = "INSERT INTO user (name, last_name, password, email, age, gender) VALUES (?,?,?,?,?,?)";
                $statement = $connection->prepare($sqlQueryString);
                $statement->bindParam(1, $name);
                $statement->bindParam(2, $last_name);
                $statement->bindParam(3, $passwordHash);
                $statement->bindParam(4, $email);
                $statement->bindParam(5, $age);
                $statement->bindParam(6, $gender);
                $status = $statement->execute();

            } catch (PDOException $exception) {
            echo "Something went wrong: " . $exception->getMessage() . "<br>";
        }        header('Location: ./index.php');
    }
        

    }
 
} catch (\Throwable $th) {
    $_SESSION['register'] = [];
    //var_dump($th->getMessage());
    //var_dump($th->getFile());
    //var_dump($th->getLine());
    header("Location: ./page-not-found.php");
}


// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-register.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>