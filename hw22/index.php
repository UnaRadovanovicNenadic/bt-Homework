<?php

include ('user.php');


session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEWORK 22</title>
</head>
<body>
    <h3>USERS</h3>

    <?php

        try {
            $user1 = new Users();
            $user2 = new Users();
            $user3 = new Users();
            $user4 = new Users();
            $user5 = new Users();
            $user6 = new Users();
            $user7 = new Users();
            $user8 = new Users();
            $user9 = new Users();
            $user10 = new Users();
            $user1->insertUser("Una","una1@gmail.com","una1",date("Y-m-d h:i:s"),date("Y-m-d h:i:s")); 
            $user2->insertUser("Nikola","nikola1@gmail.com","nikola1",date("Y-m-d h:i:s"), date("Y-m-d h:i:s")); 
            $user3->insertUser("Angie","angie1@gmail.com","angie1",date("Y-m-d h:i:s"), date("Y-m-d h:i:s")); 
            $user4->insertUser("Zoran","zoca@gmail.com","zoran1",null, date("Y-m-d h:i:s")); 
            $user5->insertUser("Sanja","sanja1@gmail.com","sanjic",date("Y-m-d h:i:s"), date("Y-m-d h:i:s")); 
            $user6->insertUser("Pera","nperica@gmail.com","12345",date("Y-m-d h:i:s"), date("Y-m-d h:i:s")); 
            $user7->insertUser("Milan","milan@gmail.com","milan1",date("Y-m-d h:i:s"), date("Y-m-d h:i:s")); 
            $user8->insertUser(null,"cile@gmail.com","cile1",date("Y-m-d h:i:s"), date("Y-m-d h:i:s")); 
            $user9->insertUser("Miljana","mj@gmail.com","mj123",date("Y-m-d h:i:s"), date("Y-m-d h:i:s")); 
            $user10->insertUser("Slobodan","sloba@gmail.com","fax123",date("Y-m-d h:i:s"), date("Y-m-d h:i:s"));
        }
        catch (\Throwable $th) {
            echo "Error occured while inserting users: ".$th->getMessage();
        }

    ?>


</body>
</html>