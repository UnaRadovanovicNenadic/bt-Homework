<?php
    if ($gender = "male") {
        echo "Mister $name $surname,";
    } elseif ($gender = "female") {
        echo "Miss $name $surname,";
    } else {
        echo "Mister/Miss $name $surname,":
    }
    echo "<br>";
    echo "You have successfully registered for our course(s).";
    echo "<br>";
    echo "Your password is: $password."
    echo "<br>";
    echo "Your username is: $email.";
    echo "<br>";
    $course_list = array ($c_choice);
    echo "Your chosen courses are: $corse_list."
?>