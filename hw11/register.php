<?php
    $name = $_GET['name'];
    print_r($name);
    $surname = $_GET['surname'];
    $gender = $_GET['gender'];
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
    $password = $_POST['password'];
    echo "Your password is: $password.";
    echo "<br>";
    $email = $_POST['email'];
    echo "Your username is: $email.";
    echo "<br>";
    $course_list = $_POST[array($c_choice)];
    echo "Your chosen courses are: $corse_list."
?>