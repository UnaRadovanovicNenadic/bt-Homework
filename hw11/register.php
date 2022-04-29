<?php
    $name = $_GET["firstname"];

    $surname = $_GET["secondname"];
    
    $gender = $_GET["gend"];

    $mail = $_GET["e_mail"];

    $password = $_GET["pass"];

    $courses = $_GET["choices"];
      
?>

<html>

<body>

<?php

    if ($gender == "male") {
        echo "Mister $name $surname ,";
    } else if ($gender == "female") {
        echo "Miss $name $surname ,";
    } else if ($gender == "other") {
        echo "Mister/Miss $name $surname ,";
    }

    echo "<br>"; echo "<br>";
    echo "You have successfully registered to our course(s).";
    echo "<br>"; echo "<br>";
    echo "Your username is: $mail.";
    echo "<br>"; echo "<br>";
    echo "Your password is: $password.";
    echo "<br>"; echo "<br>";
    
    if (empty($courses)) {
        echo "You didn't register for any courses, but we will contact you with updates about new courses.";
    } else {
        $N = count ($courses);
        echo "You have registered for $N course(s):";
        for ($i=0; $i<$N; $i++) {
        echo " - " . ($courses[$i]);
        }
    } echo ".";
?>

</body>

</html>