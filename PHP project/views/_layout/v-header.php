<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <link rel="icon" href="./public/theme/img/logo/green.png">
    <title>SEPCA Online Bookshop</title>
</head>

<body>
                                        <!-- START HEADER--> 
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color:#5eac1b; z-index:4; padding-top:20px; padding-bottom:20px; ">
            <div class="container">
                <div class="col-2">
                    <a class="navbar-brand text-light" href="./"><img src="./public/theme/img/logo/blue.png" width="150"></a>
                </div>

                <div class="col-7"  style="padding-left:78px">
                        <ul class="navbar-nav  text-center">
                            <li class="nav-item">
                                <a class="nav-link
                                    <?php if($page == 'index') {
                                    echo htmlspecialchars('active');
                                    } ?>
                                    "href="./index.php"><h4>HOME</h4></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link
                                    <?php if($page == 'products') {
                                    echo htmlspecialchars('active');
                                    } ?>
                                    "href="./products.php"><h4>PRODUCTS</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link
                                    <?php if($page == 'about') {
                                    echo htmlspecialchars('active');
                                    } ?>
                                    "href="./about.php"><h4>ABOUT US</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link
                                    <?php if($page == 'contact') {
                                    echo htmlspecialchars('active');
                                    } ?>
                                    "href="./contact.php"><h4>CONTACT US</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link
                                    <?php if($page == 'register') {
                                    echo htmlspecialchars('active');
                                    } ?>
                                    "href="./register.php"><h4>REGISTER</h4>
                                </a>
                            </li>
                        </ul>
                </div>


                <div class="col-2"  style="margin-right:15px; padding-left:50px">
                    <div class="row  text-center">
                        <div class="col-4">
                            <a class="nav-link position-relative" href="./create.php"  
                                <?php 
                                    if(empty($_SESSION['user'])) { ?> hidden 
                                <?php 
                                    }?>
                                ><img src="./public/theme/img/pictures/book.png" width="42">                               
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="nav-link position-relative" href="./login.php">
                                <img src="./public/theme/img/pictures/user.png" width="42">
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="nav-link position-relative" href="./shopping-cart.php">
                            <img src="./public/theme/img/pictures/shopcart.png" width="42">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    <?php 
                                    if(!empty($_SESSION['cart'])) {
                                        echo count($_SESSION['cart']);
                                    } else {
                                        echo 0;
                                    }
                                    ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
                                    <!-- END HEADER-->
