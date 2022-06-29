<?php

//Kreirati klasu Contact:  protected $phone; protected $email; 
//Potrebno je da ima funkcije za setovanje i dohvatanje atributa, 
//kao i funciju contains($text = “”) koja proverava da li se sadrzi unutar nekog od parametra. 
class Contact {
    protected $phone;
    protected $email;

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setEmail($email) {
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

}

//Kreirati  klasku ContactList protected $contacts = []; 
//Kreirati funckije addContact(Contact $contact) (instanceof) koja dodaje objekat klase kontakt u $contacts. 
//listAllContacts() (echo) koja ispisuje sve kontakte koji su upisani u objektu.

//The instanceof keyword is used to check if an object belongs to a class. 
//The comparison returns true if the object is an instance of the class, it returns false if it is not.
class ContactList {
    protected $contactlist = [];

    public function addContact(Contact $contact) {
        if ($contact instanceof Contact) {
            array_push($this->contactlist, $contact);
        } return $this->contactlist;
    }

    function listAllContacts() {
        echo "Contact list:<br>";
        foreach ($this->contactlist as $contact) {
            echo "Contact phone number is " . $contact->getPhone() . " and e-mail is " . $contact->getEmail() . ".<br>";
        }
    }


}

$contact1 = new Contact();
$contact1->setPhone('0641234567');
$contact1->setEmail('contact1@gmail.com');

$contact2 = new Contact();
$contact2->setPhone('0657654321');
$contact2->setEmail('contact2@gmail.com');

$contact3 = new Contact();
$contact3->setPhone('0600600600');
$contact3->setEmail('contact3@gmail.com');

echo "Contact1 phone number is " . $contact1->getPhone() . " and e-mail is " . $contact1->getEmail() . ".<br>";
echo "Contact2 phone number is " . $contact2->getPhone() . " and e-mail is " . $contact2->getEmail() . ".<br>";
echo "Contact3 phone number is " . $contact3->getPhone() . " and e-mail is " . $contact3->getEmail() . ".<br>";

echo "<br>";

$contact1->containsText('064');
$contact2->containsText('@');
$contact3->containsText('adaf');

echo "<br>";

$contactlist = new ContactList();
$contactlist->addContact($contact1);
$contactlist->addContact($contact2);
$contactlist->addContact($contact3);
var_dump($contactlist);
echo "<br><br>";

$contactlist->listAllContacts();


?>