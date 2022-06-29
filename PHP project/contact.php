
<?php


session_start();
// PAGE TITLE
$page = 'contact';

if (!empty($_GET['page'])) {
    $pagPage = $_GET['page'];
} else {
    $pagPage = 1;
}



$systemErrors = [];
$name = '';
$email = '';
$message = '';


try {
    // VALIDACIJA KONTAKTA
    if(isset($_POST['contact']) && !empty($_POST['contact']) && ($_POST['contact'] == "yes")) {

    // NAME
    $name = (string) $_POST['name'];
    $name = trim($name);
    if(empty($name)) {
        $systemErrors['name'] = "Field name is required!";
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
    
    // MESSAGE
    $message = (string) $_POST['message'];
    $message = trim($message);
    if(empty($message)) {
        $systemErrors['message'] = "You wanted to contact us, thus field message is required!";
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
    
                    $sqlQueryString = "INSERT INTO contacts (name, email, message) VALUES (?,?,?)";
                    $statement = $connection->prepare($sqlQueryString);
                    $statement->bindParam(1, $name);
                    $statement->bindParam(2, $email);
                    $statement->bindParam(3, $message);
                    $status = $statement->execute();
    
                } catch (PDOException $exception) {
                echo "Something went wrong: " . $exception->getMessage() . "<br>";
            }header("Location: ./contact.php");
        }

}
    
} catch (\Throwable $th) {
    $_SESSION['contact'] = [];
    header("Location: ./page-not-found.php");
}


// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-contact.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

?>