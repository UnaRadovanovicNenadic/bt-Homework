<?php


include ('db.php');



class Colors extends DB { //nas korisnik, korisnik koga pravimo, registrujemp, extend db da bi moglo da se povezuje sa bazom

    public function getSetColors() { //za proveru postavljenih boja
        $sql = "SELECT * FROM colors"; //statemnet
        $stmt = $this->connect()->query($sql);//statement ->query sa nasim sql-om
        while ($row = $stmt->fetch()) { // 'user' moze da se zameni sa bilo cim
            echo "ID: " . $row['id'] . ", Color name: " . $row['name'] .
                ", Hex value: " . $row['hex_value'] . ", Status: " . $row['status'] .
                ", Created at: " . $row['created_at'] . ", Changed at: " . $row['changed_at'] .". <br>";
        }
    }

//zadatak 1.1: za dobijanje svih boja koje su aktivne (status=1), a dobiti ih sortirane po datumu kreiranja
    public function getStatus1Created() { 
        $sql = "SELECT * FROM colors WHERE status=1 ORDER BY created_at asc;"; //statemnet
        $stmt = $this->connect()->query($sql);//statement ->query sa nasim sql-om
        while ($row = $stmt->fetch()) { // 'user' moze da se zameni sa bilo cim
            echo "ID: " . $row['id'] . ", Color name: " . $row['name'] .
                ", Hex value: " . $row['hex_value'] . ", Status: " . $row['status'] .
                ", Created at: " . $row['created_at'] . ", Changed at: " . $row['changed_at'] .". <br>";
        }
    }

//zadatak 1.2: za dobijanje 5 bilo kojih boja
    public function get5Random() {
        $sql = "SELECT * FROM colors ORDER BY RAND() LIMIT 5;"; //statemnet
        $stmt = $this->connect()->query($sql);//statement ->query sa nasim sql-om
        while ($row = $stmt->fetch()) { // 'user' moze da se zameni sa bilo cim
            echo "ID: " . $row['id'] . ", Color name: " . $row['name'] .
                ", Hex value: " . $row['hex_value'] . ", Status: " . $row['status'] .
                ", Created at: " . $row['created_at'] . ", Changed at: " . $row['changed_at'] .". <br>";
        }
    }

//zadatak 1.3: za upis nove boje u bazu
    public function insertColor($name, $hex_value, $status) {
        $sql = "INSERT INTO colors (name, hex_value, status) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql); ///prepare kada su neki parametri ? pripremi to pa onda izvrsava
        $stmt->execute([$name, $hex_value, $status]);//execute kad imamo prepare
    }

//zadatak 1.4: za promenu statusa - sve noje koje su neaktivne postaviti da su aktivne
    public function setInactive2Active() {
        $sql = "UPDATE colors SET status=1 WHERE status=0;"; //statemnet
        $stmt = $this->connect()->query($sql);//statement ->query sa nasim sql-om
        while ($row = $stmt->fetch()) { // 'user' moze da se zameni sa bilo cim
            echo "ID: " . $row['id'] . ", Color name: " . $row['name'] .
                ", Status: " . $row['status'] . ", Changed at: " . $row['changed_at'] .". <br>";
        }
    }

//zadatak 1.5> za brisanje boje koja ima id=5
    public function deleteByID($ID) {
        $sql = "DELETE FROM colors WHERE id=$ID;"; //statemnet
        $stmt = $this->connect()->query($sql);//statement ->query sa nasim sql-om
        while ($row = $stmt->fetch()) { // 'user' moze da se zameni sa bilo cim
            echo "ID: " . $row['id'] . ", Color name: " . $row['name'] .
                ", Hex value: " . $row['hex_value'] . ", Status: " . $row['status'] .
                ", Created at: " . $row['created_at'] . ", Changed at: " . $row['changed_at'] .". <br>";
        }
    }

//zadatak za bonus obrisati boju koja je najranije promenjena
    public function deleteByfirstChange() {                                          
        $stmt= $this->connect()->prepare("DELETE FROM `colors` ORDER BY changed_at ASC LIMIT 1;"); //statemnet
        $stmt->execute();
    }


}


?>