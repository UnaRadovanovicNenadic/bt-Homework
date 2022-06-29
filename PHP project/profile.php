
<?php


session_start();
if (empty($_SESSION['user'])) {
    header ('Location: ./login.php');
}
//var_dump($_SESSION['user']);
// PAGE TITLE
$page = 'profile';

if (!empty($_GET['page'])) {
    $pagPage = $_GET['page'];
} else {
    $pagPage = 1;
}



$systemErrors = [];
$name = '';
$last_name = '';
$password = '';
$re_password = '';
$email = '';
$age = '';
$gender = '';

    //DATABASE ENTRY
    try {
        /* * * mysql hostname ** */
        $hostname = "localhost";
        /* * * mysql username ** */
        $username = "root";
        /* * * mysql password ** */
        $pass = "";
        /* * * mysql database name ** */
        $database = "bookshop";            
        $connection = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
        $sql = "SELECT * FROM user WHERE email LIKE :email";
        $stmt = $connection->prepare($sql);
        //$stmt->bindValue(':email', $_SESSION['user']['email']);
        $stmt->execute(['email'=>$_SESSION['user']['email']]);
       while ($row = $stmt->fetch()) { // 'user' moze da se zameni sa bilo cim

           $user_name = ($row['name']);
           $user_surname = ($row['last_name']);
           $user_password = ($row['password']);
           $user_email = ($row['email']);
           $user_age = ($row['age']);
           $user_gender = ($row['gender']);

           
       };

}
   // }
    

 catch (\Throwable $th) {
    $_SESSION['profile'] = [];
    //var_dump($th->getMessage());
    //var_dump($th->getFile());
    //var_dump($th->getLine());
    header("Location: ./page-not-found.php");
}




//----------------------------------------------------------------CHANGE DATA












// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-profile.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
