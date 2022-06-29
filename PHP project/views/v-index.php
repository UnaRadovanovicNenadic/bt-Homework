                                <!-- START MAIN -->

                                <main>
        <div class="container" style="margin-top: -100px">
            <section class="mb-5">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="./public/theme/img/wallpapers/books.jpg" class="d-block w-100" alt="WALL"></svg>

                            <div class="container">
                                <div class="carousel-caption text-start" style="background-color:#0d3a8390; padding: 15px;">
                                    <h1>Welcome to SEPCA!</h1>
                                    <p>You trusted us, and we reciprocate with knowledge.</p>
                                    <p><a class="btn btn-lg" style="background-color:#5eac1b" href="./about.php">About us</a></p>
                                </div>
                            </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" 
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="./public/theme/img/wallpapers/table.jpg" class="d-block w-100" alt="WALL"></svg>

                        <div class="container">
                            <div class="carousel-caption" style="background-color:#0d3a8390; padding: 15px;">
                                <h1>SEPCA has extended its offer!</h1>
                                <p>Check out our Online Bookshop.</p>
                                <p><a class="btn btn-lg" style="background-color:#5eac1b" href="./products.php">Products</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" 
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="./public/theme/img/wallpapers/openbooks.jpg" class="d-block w-100" alt="WALL"></svg>

                        <div class="container">
                        <div class="carousel-caption text-end" style="background-color:#0d3a8390; padding: 15px; ">
                            <h1>Special offers for loyal customers!</h1>
                            <p>Make your personal account and check out the benefits.</p>
                            <p><a class="btn btn-lg" style="background-color:#5eac1b" href="./register.php">Register</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            
            <div class="row" style="margin-top: 7%; margin-bottom: 0px !important;">
                        <div class="col-1"></div>
                        <div class="col-3" style="padding-top:100px">
                            <h1 class="display-5 fw-bold lh-1 mb-3" style="color:red;">NEW ARRIVAL!</h1>
                            <p class="lead" style="color:#1c53a4;"><b>Reserve your copy now - <br>PREORDER!</b></p>
                        </div>
                        <div class="col-7">
                            <div class="row">
                                <?php foreach ($products as $product) { 
                                    if ($product->stock == 0 && $product->sold == 0) {?>
                                    <article class="single-product row mb-5" style="background-color: #1c53a4; color: #ffffff; margin-left:55px; margin-right:55px; margin-top:0.5%">
                                        <div class='col-5 text-center' style="padding: 20px">
                                            <img src="<?php echo htmlspecialchars($product->img); ?>" alt="" width="200" >
                                        </div>
                                        <div class='col-7 text-center'style="padding: 20px" >
                                            <p><?php echo htmlspecialchars($product->author); ?></p>
                                            <br>
                                            <h4><?php echo htmlspecialchars($product->title); ?></h4>
                                            <hr>
                                            <p>Type: <?php echo htmlspecialchars(ucfirst($product->type)); ?></p>
                                            <p>Price: $ <?php echo htmlspecialchars($product->price); if ($product->price < 5) echo "<p style='background-color:red; padding:5px'>Special price!</p>"?></p>
                                            <div style="margin-top:15px">
                                                <a class="btn" style="background-color: #81c449;" href="./single.php?product=<?php echo htmlspecialchars($product->id) ?>">Show Product</a>
                                                <button form="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" class="btn" style="background-color:#00bfff">Add to Cart</button>
                                                <form id="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" action="./products.php" method="post">
                                                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                                                </form>
                                            </div>
                                        </div>
                                    </article>
                                <?php }} ?>
                            </div>
                        </div>
            </div>


          

            <section class="mb-5">
                <div class="px-4 pt-5 my-5 text-center border-bottom" style="background-color:#5eac1b; color:#ffffff">
                    <h4 class="fw-bold">CHECK OUT OUR MOST SOLD BOOKS!</h4>
                        <div class="col-lg-6 mx-auto">
                            <p class="lead mb-4">Maybe you are looking for one of those...</p>
                        </div>
                </div>
                <section class="mb-5 row" >
                    <?php
                    foreach ($mostSold as $singleMost) { ?>
                        <article class="col-4 row text-center" style="color:  #1c53a4; margin: 0px" >
                                <div class='col-5' style="padding-left: 50px">
                                    <img src="<?php echo htmlspecialchars($singleMost->img); ?>" alt="" width="130px">
                                </div>
                                <div class='col-7' style="padding-top:10 px">
                                    <h4><b><?php echo htmlspecialchars($singleMost->title); ?></b></h4>
                                    <p style="padding:3px">PRICE: <?php echo htmlspecialchars($singleMost->price); ?> $</p>
                                    <a class="btn" style="background-color: #81c449; color: #ffffff" href="./single.php?product=<?php echo htmlspecialchars($singleMost->id); ?>">Show Product</a>
                                </div>
                        </article>
                    <?php } ?>
                </section>
            </section>

            <section class="mb-5" style="margin-top: 7%; margin-bottom: 25%;">
                <div class="px-4 pt-5 my-5 text-center border-bottom" style="background-color:#0d3a83; color:#ffffff">
                    <h4 class="fw-bold">CHECK OUT OUR MOST VIEWED BOOKS!</h4>
                        <div class="col-lg-6 mx-auto">
                            <p class="lead mb-4">Maybe you are looking for one of those...</p>
                        </div>
                </div>
                <section class="mb-5 row" >
                    <?php
                    foreach ($mostProducts as $product) { ?>
                        <article class="col-4 row text-center" style="color:  #1c53a4; margin: 0px" >
                                <div class='col-5' style="padding-left: 50px">
                                    <img src="<?php echo htmlspecialchars($product->img); ?>" alt="" width="130px">
                                </div>
                                <div class='col-7' style="padding-top:10 px">
                                    <h4><b><?php echo htmlspecialchars($product->title); ?></b></h4>
                                    <p style="padding:3px">PRICE: <?php echo htmlspecialchars($product->price); ?> $</p>
                                    <a class="btn" style="background-color: #81c449; color: #ffffff" href="./single.php?product=<?php echo htmlspecialchars($product->id); ?>">Show Product</a>
                                </div>
                        </article>
                    <?php } ?>
                </section>
            </section>
        </div>


    </main>

                                    <!-- END MAIN -->
