<?php

class Connection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "hw22"; //    !!!! BITNO  !!!!!

    public function connect() {
        $dsn = "mysql:host=" . $this->host ."; dbname=" . $this->dbName;
        $pdo = new PDO ($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//podesavanje atributa  
        return $pdo;
    }


}





?>