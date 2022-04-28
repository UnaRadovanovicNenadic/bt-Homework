<?php
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $gender = $_GET[array ('gender')];
    if ($gender = "male") {
        echo "Mister $name $surname,";
    } elseif ($gender = "female") {
        echo "Miss $name $surname,";
    } else {
        echo "Mister/Miss $name $surname,";
    }
    echo "<br>";
    echo "You have successfully registered for our course(s).";
    echo "<br>";
    $password = $_GET['password'];
    echo "Your password is: $password.";
    echo "<br>";
    $email = $_GET['email'];
    echo "Your username is: $email.";
    echo "<br>";
    $course_list = $_GET[array($c_choice)];
    echo "Your chosen courses are: $corse_list."
?>