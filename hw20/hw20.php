<?php

//Kreirati klasu Contact:  protected $phone; protected $email; 
//Potrebno je da ima funkcije za setovanje i dohvatanje atributa, 
//kao i funciju contains($text = “”) koja proverava da li se sadrzi unutar nekog od parametra.
// U klasi Contact dodati funkciju displayMe() koja ispisuje vrednosti atributa. 
abstract class Contact { //The abstract keyword declares a class as abstract. Abstract classes cannot be instantiated but they can be extended.
    protected $phone;
    protected $email;

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }


    public function containsText($text = ""){
        if (str_contains($this->getPhone(), $text)) {
            echo "Contacts phone number contains " . $text . " - " . $this->getPhone() . ". ";
        } else {
            echo "Contacts phone number does not contain " . $text . " - " . $this->getPhone() . ". ";
        }
        if (str_contains($this->getEmail(), $text)) {
            echo "Contacts email contains " . $text . " - " . $this->getEmail() . ".<br>";
        } else {
            echo "Contacts email does not contain " . $text . " - " . $this->getEmail() . ".<br>";
        }

    }

    public function displayMe() {
        echo "Contact phone number is " . $this->getPhone() . " and e-mail is " . $this->getEmail() . ".";
    }

}

//Kreirati Klasu CustomerContact koja ima sve kao i klasa Contact 
//kao i protected $firstName; protected $lastName; 
//kao i metodu displayMe() (override) koja ispisuje sve atribute CustomerContact klase. 

class CustomerContact extends Contact {
    protected $name;
    protected $surname;

    public function setName($name) {
        $this->name = $name;
    }

    public function setSurname($surname){
        $this->surname = $surname;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function displayMe() {
        echo "Contact name is " . $this->getName() . " and last name is " . $this->getSurname() . ". "; 
        echo parent::displayMe() . ". ";
    }

}

//Kreirati Klasu BusinessContact koja ima sve kao i klasa Contact 
//kao i protected $address; protected $companyName; 
//kao i metodu displayMe() (override) koja isisuje sve atribute BusinessContact klase. 

class BussinessContact extends Contact {
    protected $address;
    protected $companyName;

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setCompany($companyName){
        $this->companyName = $companyName;
    }

    public function getAdress() {
        return $this->address;
    }

    public function getCompany() {
        return $this->companyName;
    }

    public function displayMe() {
        echo "Company name is " . $this->getCompany() . " and address is " . $this->getAdress() . ". ";
        echo parent::displayMe() . ". ";
    }

}

//Kreirati  klasku ContactList protected $contacts = []; 
//Kreirati funckije addContact(Contact $contact) (instanceof) koja dodaje objekat klase kontakt u $contacts. 
//listAllContacts() (echo) koja ispisuje sve kontakte koji su upisani u objektu.

//The instanceof keyword is used to check if an object belongs to a class. 
//The comparison returns true if the object is an instance of the class, it returns false if it is not.
class ContactList {
    protected $contactlist = [];

    public function addContact(Contact $contact) {//izmeniti uslov 
        if ($contact instanceof CustomerContact or $contact instanceof BussinessContact) {
            array_push($this->contactlist, $contact);
        } return $this->contactlist;
    }

    function listAllContacts() {
        echo "<b>Contact list:</b><hr>";
        foreach ($this->contactlist as $contact) {
            echo $contact->displayMe() . "<hr>";
        }
    }


}

$customer1 = new CustomerContact();
$customer1->setPhone("0653216549");
$customer1->setEmail("customer1@gmail.com");
$customer1->setName("Customer1");
$customer1->setSurname("SurnameCustomer1");

$customer2 = new CustomerContact();
$customer2->setPhone("0659876543");
$customer2->setEmail("customer2@gmail.com");
$customer2->setName("Customer2");
$customer2->setSurname("SurnameCustomer2");

$company1 = new BussinessContact ();
$company1->setPhone("0601234567");
$company1->setEmail("company1@gmail.com");
$company1->setAddress("Street 123, Belgrade");
$company1->setCompany("Company1");


$company2 = new BussinessContact ();
$company2->setPhone("0647654321");
$company2->setEmail("company2@gmail.com");
$company2->setAddress("Street 33, Belgrade");
$company2->setCompany("Company2");

$contactlist = new ContactList();
$contactlist->addContact($customer1);
$contactlist->addContact($customer2);
$contactlist->addContact($company1);
$contactlist->addContact($company2);

$contactlist->listAllContacts();

$customer1->containsText('064');
$customer2->containsText('@');
$customer1->containsText('co');
$customer2->containsText('adaf');
$company1->containsText('co');
$company2->containsText('064');
$company1->containsText('adaf');
$company2->containsText('@gm')

?>