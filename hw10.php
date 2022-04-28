<!DOCTYPE html>

<html lang="en">

<head>
    <title>Homework 10</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>                                    
        * {
            font-family: Georgia;
            background-color: #fddb5b;
            background-position: fixed;
        }

        header, .main, footer {
            margin-right: 2.5%;
            margin-left:2.5%;
            margin-top: 0%;
            margin-bottom: 0%;
        }

        header {
            font-size: large;
            font-weight: bold;
            display: inline-block;
            position: relative;
            width: 90%;
            text-align: center;
            vertical-align: middle;
            line-height: 10%;
            padding: 2%;
            background-color: #021945;
            color: #fab935;
        }

        .main {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            background-color: blue;
            margin: 2.5%;
            width: 90%;
            padding: 2%;
            background-color: #021945;
        }

        .task-background {
            display: inline-block;
            width: 25%;
            height: 50%;
            justify-content: space-around;
            text-align: center;
            margin-right: 2%;
        }
    
        .task {
            padding: 4%;
            margin: 0%;
            background-color: #5a82ea;
            text-align: center;
            width: 100%;
            color: #fab935;
        }

        .result {
            padding:4%;
            margin:0%;
            background-color: #fddb5b;
            text-align: center;
            width: 100%;
            color: #2058dc;
        }

        p {
            color: #021945;
            text-decoration: underline;
        }

        footer {
            font-size: medium;
            display: inline-block;
            position: relative;
            width: 90%;
            text-align: center;
            vertical-align: middle;
            line-height: 10%;
            padding: 2%;
            background-color: #021945;
            color: #fab935;
        }

        @media only screen and (max-width: 390px){
            * {
                font-size: medium;
            }

            header, .main, footer {
                margin-right: 2.5%;
                margin-left:2.5%;
                margin-top: 1%;
                margin-bottom: 1%;
                font-size: smaller;
            }

            .main {
                flex-direction: column;
                margin-left: none;
            }

            .task-background {
                width: 90%;
                margin: 2.5%;
                margin-left: 1.5%;
            }
        }

        @media only screen and (max-width: 576px){
            header, footer {
                padding: 4%;
                margin-left: 1%;
                font-size: medium;
            }

            .main {
                padding: 4%;
                margin-left: 1%;
            }
        }
    </style>
</head>

<body>

    <header>HOMEWORK NO.10</header>

    <main class="main">

        <section class="task-background">

            <div class="task">Task No.1:</div>
            <div class="result">
                <p>First version</p>
                <?php
                    $x = 200;
                    $y = 80;
                    $added = $x + $y;
                        echo $added;
                        echo "<br>";
                    $multiplied = $x * $y;
                        echo $multiplied;
                        echo "<br>";
                    $subtracted = $x - $y;
                        echo $subtracted;
                        echo "<br>";
                    $divided = $x / $y;
                        echo $divided;
                ?>
            </div>

            <div class="result">
                <p>Second version</p>
                <?php
                    $x = 200;
                    $y = 80;
                    function add ($x, $y) {
                        return $x + $y;
                    }
                    function multiply ($x, $y) {
                        return $x * $y;
                    }
                    function subtract ($x, $y) {
                        return $x - $y;
                    }
                    function divide ($x, $y) {
                        return $x / $y;
                    }
                    echo add ($x, $y);
                    echo "<br>";
                    echo multiply ($x, $y);
                    echo "<br>";
                    echo subtract ($x, $y);
                    echo "<br>";
                    echo divide ($x, $y);
                    echo "<br>";
                ?>
            </div>
           
        </section>
        
        <section class="task-background" class="weekday">

            <div class="task">Task No.2:</div>

            <div class="result">
                <p>First version</p>
                <?php
                    $day = 2;
                    if ($day == 0) {
                        echo "Today is Monday.";
                    } elseif ($day == 1) {
                        echo "Today is Tuesday.";
                    } elseif ($day == 2) {
                        echo "Today is Wednesday.";
                    } elseif ($day == 3) {
                        echo "Today is Thursday.";
                    } elseif ($day == 4) {
                        echo "Today is Friday!";
                    } elseif ($day == 5) {
                        echo "Today is Saturday.";
                    } elseif ($day == 6) {
                        echo "Today is Sunday";
                    }
                ?>
            </div>

            <div class="result">
                <p>Second version</p>
                <?php
                    $day = mt_rand (0,6);
                    echo "$day : ";
                    switch ($day) { 
                        case ($day === 0): 
                            echo "Today is Sunday.";
                            break;
                        case ($day === 1):
                            echo "Today is Monday."; 
                            break;
                        case ($day === 2):
                            echo "Today is Tuesday."; 
                            break;
                        case ($day === 3):
                            echo "Today is Wednesday.";
                            break;
                        case ($day === 4):
                            echo "Today is Thursday.";
                            break;
                        case ($day === 5):
                            echo "Today is Friday!";
                            break;
                        case ($day === 6):
                            echo "Today is Saturday.";
                            break;
                    }
                ?>
            </div>
        </section>

        <section class="task-background" class="math">

            <div class="task">Task No.3:</div>

            <div class="result">
            <p>First version</p>
                <?php
                    $a = 3;
                    $b = 7;
                    $c = 6;
                    $d = $a + $b + $c;
                        echo "The sum of numbers " . $a . ", " . $b . " and " . $c . " is " . $d . ".";
                ?>
            </div>

            <div class="result">
                <p>Second version</p>
                <?php
                    $a = mt_rand (1,10);
                    $b = mt_rand (1,10);
                    $c = mt_rand (1,10);
                    $d = array ($a, $b, $c);
                    echo "The sum of numbers " . $a . ", " . $b . " and " . $c . " is " . array_sum($d) . ".";
                ?>
            </div>
        </section>

    </main>

    <footer>By URN</footer>

    
</body>

</html>