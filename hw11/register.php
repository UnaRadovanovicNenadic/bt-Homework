<!DOCTYPE html>
<html>


<head>
    <title>Register</title>
    <link rel="stylesheet" href="./theme/CSS/register.css">
</head>


<header>

    <div id="headline">
        <h1 class="head">Registration Confirmation</h1>
    </div>

    <div>
    <nav id="nav">
        <ul type="none">Web Page Navigation:
            <a href="register.html">Register</a> > <a href="register.php">Registration</a>
        </ul>
    </nav>
    </div>

</header>

<main>

    <?php
        $name = $_GET['name'];
        echo $name;


    ?>

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

</main>

<footer>

    <h1 class="foot">Thank <em>YOU</em> for your TRUST!
    <br>
    Now, You Can Learn Easy and Quickly with <em>OUR</em> HELP!</h1>

</footer>

</html>