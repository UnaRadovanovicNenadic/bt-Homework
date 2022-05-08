<?php
    $age = $_POST["age"]; 
        if (isset($age)) {
            echo "Age entry validated. Entered age is " . $age . ".";
        } else {
            echo "Please insert your age in numbers with no decimal places.";
        }
        echo "<br>";

        function AgeFactor ($age) {
            if ($age<=3) {
                return $age_factor = 1.9;
            } else if ($age>=4 && $age<=10) {
                return $age_factor = 1.5;
            } else if ($age>=11 && $age<=18)  {
                return $age_factor = 1.2;
            } else if ($age>=19 && $age<=26)  {
                return $age_factor = 1;
            } else if (($age>=27 && $age<=30) || ($age>=50 && $age<=60)){
                return $age_factor = 0.8;
            } else if (($age>=31 && $age<=35) || ($age>=45 && $age<=49)) {
                return $age_factor = 0.7;
            } else if (($age>=36 && $age<=44) || ($age>=61)) {
                return $age_factor = 0.6;
            }
        }

        $age_factor = AgeFactor($age);
        echo "Age factor for entered age is " . $age_factor . ".";
        echo "<br>";
 

    $occupation = $_POST["occup"];
        $occupation = strtolower($occupation);
    
        function OccupFactor ($occupation) {
        if (($occupation === "manager") || ($occupation === "administrative worker") || ($occupation === "programmer")) {
            return $occup_factor = 100;
        } else if (($occupation === "police officer") || ($occupation === "army officer")) {
            return $occup_factor = 200;
        } else if ($occupation === "professional athlete") {
            return $occup_factor = 300;
        } else {
            return $occup_factor = 150;
        } 
        }
        $occup_factor = OccupFactor($occupation);
        echo "Occupation factor for your entry is " . $occup_factor . ".";
        echo "<br>";    

    $weight = $_POST["weight"];
        if (isset($weight)) {
            echo "Weight entry validated. Entered weight is " . $weight . ".";
        } else {
            echo "Please insert your weight in numbers with maximum two decimal places.";
        }
        echo "<br>";

        echo "<br>";

    if ((isset($weight)) && (isset($occup_factor)) && (isset($age_factor))) {
        $max_cal = $weight * $occup_factor * $age_factor;
        echo "Due to entered parameters, you maximum calorie intake per day is: " . $max_cal . ".";
    } else {
        echo "Please check your entry parameteres. Reset and try again.";
        }
            



?>





