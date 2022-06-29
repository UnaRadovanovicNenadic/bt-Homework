
<?php


session_start();
if (empty($_SESSION['user'])) {
    header ('Location: ./login.php');
}
//var_dump($_SESSION['user']);
// PAGE TITLE
$page = 'update';

if (!empty($_GET['page'])) {
    $pagPage = $_GET['page'];
} else {
    $pagPage = 1;
}


$systemErrors_update = [];
$name_update = '';
$last_name_update = '';
$password_update = '';
$re_password_update = '';
$email_update = '';
$age_update = '';
$gender_update = '';


try {
    // VALIDACIJA KONTAKTA
    if(isset($_POST['update']) && !empty($_POST['update']) && ($_POST['update'] == "yes")) {

    // NAME
    if(!empty($_POST['name']) && isset($_POST['name'])) {
        $name_update = (string) $_POST['name'];
        $name_update = trim($name_update);        
    } else {
        $name_update = $user_name;
    }

echo $user_name;
    
    // LAST NAME
    if(!empty($_POST['last_name']) && isset($_POST['last_name'])) {
        $last_name_update = (string) $_POST['last_name'];
        $last_name_update = trim($last_name_update);        
    }



    //PASSWORD
    if(!empty($_POST['password']) && isset($_POST['password'])){
        $password_update = (string) $_POST['password'];
        $password_update = trim($password_update);

        if(strlen($password_update) <= 7) {
            $systemErrors_update['password'] = "Password must have more than 7 characters!";
        }
        if(!preg_match('/[A-Z]/', $password_update)) {
            $systemErrors_update['password'] = "Password must have at least one upper case letter!";
        }
        if(!preg_match('/[0-9]/', $password_update)) {
            $systemErrors_update['password'] = "Password must have at least one number!";
        }        
    }


    //RE-RASSWORD
    if(!empty($_POST['re_password']) && isset($_POST['re_password'])) {
        $re_password_update = (string) $_POST['re_password'];
        $re_password_update = trim($re_password);
        if(!empty($password_update)){
            if(empty($re_password_update)) {
                $systemErrors_update['re_password'] = "Field re-type password is required!";
            }        
        }
        if(strlen($re_password_update) <= 7) {
            $systemErrors_update['re_password'] = "Re-typed password must have more than 7 characters!";
        }
        if(!preg_match('/[A-Z]/', $re_password_update)) {
            $systemErrors_update['re_password'] = "Re-typed password must have at least one upper case letter!";
        }
        if(!preg_match('/[0-9]/', $re_password_update)) {
            $systemErrors_update['re_password'] = "Re-typed password must have at least one number!";
        }
        if ($password_update !== $re_password_update) {
            $systemErrors_update['re_password'] = "Re-typed password must must match password!";
        }
    }

    
    // EMAIL
    if(!empty($_POST['email']) && isset($_POST['email'])) {
        $email_update = (string) $_POST['email'];
        $email_update = trim($email_update);

        if(str_contains($email_update, " ")) {
            $systemErrors_update['email'] = "Mail can not include empty spaces!";
        }
        if(empty($systemErrors['email']) && !str_contains($email_update, "@")) {
            $systemErrors_update['email'] = "Mail must include @!";
        }        
    }



    //AGE
    if(!empty($_POST['age']) && isset($_POST['age'])) {
        $age_update = (string) $_POST['age'];
        $age_update = trim($age_update);
        if(!is_numeric($age_update)) {
            $systemErrors['age'] = "Field age can contain only numbers!";
        }
        if($age_update <= 0 ) {
            $systemErrors_update['age'] = "Field age must be positive number!";
        }
        if(empty($age_update)) {
            $systemErrors_update['age'] = "Field age is required!";
        }
        if(empty($systemErrors_update['age']) && false) {
            $systemErrors_update['age'] = "Age is not valid!";
        }        
    }



    //GENDER
    if(!empty($_POST['gender']) && isset($_POST['gender'])) {
        if (!empty($_POST['gender'])) {
            $gender_update = (string) $_POST['gender'];
            }
    }


    
    //DATABASE ENTRY
    if(empty($systemErrors_update)) {
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

            $passwordHash_update = password_hash($password_update, PASSWORD_DEFAULT);



            $id = $_SESSION['user']['email']  ;
            $sql = "SELECT * FROM user WHERE email LIKE $id";
            $stmt = $connection->prepare($sql);
            $stmt->execute(['email'=>$_SESSION['user']['email']]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC); //za proveravanje da li imamo to u redu
            while ($row = $stmt->fetch()) { 



                if (!empty($name_update) && isset($name_update)) {

                    $sql = "UPDATE user SET name = $name_update WHERE email = $id";
                    $stmt = $connection->prepare($sql);
                    $stmt->bindValue(1, $name_update);
                    $stmt->execute();
                } else {
                    echo "greska sa upisom update";
                }

            } 
        }catch (PDOException $exception) {
            echo "Something went wrong: " . $exception->getMessage() . "<br>";
        }        //header('Location: ./profile.php');
    }
    
    }
 
} catch (\Throwable $th) {
    $_SESSION['user'] = [];
    //var_dump($th->getMessage());
    //var_dump($th->getFile());
    //var_dump($th->getLine());
//header("Location: ./page-not-found.php");
}









// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-update.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";
