<?php


include ('connection.php');

class Users extends Connection { //nas korisnik, korisnik koga pravimo, registrujemp, extend db da bi moglo da se povezuje sa bazom

    public function insertUser($name, $email, $password, $email_verified_at, $created_at) {
        $sql = "INSERT INTO users (name, email, password, email_verified_at, created_at) VALUES (?, ?, ?, ?, ?);";
        $stmt = $this->connect()->prepare($sql); ///prepare kada su neki parametri ? pripremi to pa onda izvrsava
        $stmt->execute([$name, $email, $password, $email_verified_at, $created_at]);//execute kad imamo prepare
    }

}



?>