<?php
    $name = $_GET["firstname"];

    $surname = $_GET["secondname"];
    
    $gender = $_GET["gend"];

    $mail = $_GET["e_mail"];

    $password = $_GET["pass"];

    $courses = $_GET["choices"];
      
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./theme/css/register.css">
    <title>Register</title>
</head>

<body>
    <header>
            <div>
                <h1>Register output</h1>
            </div>

            <div>
                <nav id="nav">
                    <ul type="none">
                        <li><a href="./register.html">REGISTRATION</a> <a href="./register.php">REGISTERED</a></li>
                    </ul>
                </nav>
            </div>
    </header>

    <main>
        <section class="output">
            <?php

                if ($gender == "male") {
                    echo "Mister $name $surname,";
                } else if ($gender == "female") {
                    echo "Miss $name $surname,";
                } else if ($gender == "other") {
                    echo "Mister/Miss $name $surname,";
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
        </section>
    </main>

    <footer>
        <h3>THANK You for Your TRUST!</h3>
    </footer>      

</body>

</html>