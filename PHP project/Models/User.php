<?php

namespace Models\User;

use Models\Model\Model;

class User extends Model{
    private $user;

    public function __construct($user){

        
 
                $sql = "INSERT INTO users (name, last_name, password, re_password, email, age, gender)"
                                . " VALUES (" . ":name" . ", " . ":last_name" . "," . ":password" . ", " . ":re_password" . ", 
                                " . "email" . "," . ":age" . "," . ":gender" . ")";
                $statement = $connection->prepare($sql);
                $params = [
                    'name' => $user["name"],
                    'last_name' => $user["last_name"],
                    'password' => $user["password"],
                    're_password' => $user["re_password"],
                    'email' => $user["email"],
                    'age' => $user["age"],
                    'gender' => $user["gender"],
                ];
                $status = $statement->execute($params);
    }

    public function Login($email, $loginpassword) {


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
            if ($st->rowCount()==1) {
                echo "You are logged in succesfully";
            } else {
                echo "You need to register an account";
            }

    }

}
