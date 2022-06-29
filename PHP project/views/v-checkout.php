

<main>
    <div class="container" style="margin-top: 60px; margin-bottom: 10px;">

        <section class="mb-5">

            <div class="row text-center" style="margin: 15px; margin-top: 35px;  margin-bottom: 50px; padding: 10px; background-color: #5eac1b; color: #ffffff;">
                <h3>Last order checkup -<br>Audit your choice before confirming the purchase!</h3>
            </div>
            
            <div class="row" style="margin: 5px; margin-left: 15px; margin-top: 15px;">
                <?php $total = 0; ?>
                <?php foreach ($items as $item) {?>
                    <?php
                    $subtotal = $item->getSubtotal();
                    $total += $subtotal;
                    ?>
                <article class="single-product col-5 row mb-5" style="background-color: #1c53a4; color: #ffffff; margin-left:50px; margin-right:50px; margin-top:0.5%">
                    <div class='col-5 text-center' style="padding: 10px">
                        <img src="<?php echo htmlspecialchars($item->getProduct()->img); ?>" alt="" width="200" >
                    </div>
                    <div class='col-7 text-center'style="padding: 20px" >
                        <p><?php echo htmlspecialchars($item->getProduct()->author); ?></p>
                            <br>
                        <h5><?php echo htmlspecialchars($item->getProduct()->title); ?></h5>
                            <hr>
                        <p>Type: <?php echo htmlspecialchars(ucfirst($item->getProduct()->type)); ?></p>
                        <p>Price: $ <?php echo htmlspecialchars($item->getProduct()->price); if ($item->getProduct()->price < 5) echo 
                            "<p style='background-color:red; margin-left: 47px; width: 160px; padding:5px'>Special offer!</p>"?></p>
                        <p>Quantity: <?php echo htmlspecialchars($item->getQuantity()); ?></p>
                        <p>Subtotal: $ <?php echo htmlspecialchars($subtotal); ?></p>
                    </div>
                </article>
                <?php } ?>
            </div>

            <div class="row" style="margin: 15px; border: 3px solid #1c53a4; border-radius: 5px; color: #1c53a4;">
                <div class="d-flex justify-content-between" style="color: red;">
                    <h2 class="text">TOTAL:</h2>
                    <h2 class="text">$ <?php echo htmlspecialchars($total); ?></h2>
                </div>
            </div>

        </section>

        <section class="mb-5">
            <div class="row">

                <div class="col-6 mb-5">
                    <div class="row" style="margin: 15px; color: #1c53a4;">
                        <div class="row text-center" style="padding: 10px; background-color: #5eac1b; color: #ffffff; margin-bottom: 50px;">
                            <h3>You are not satisfied with your order?<br>Try options below.</h3>
                        </div>
                        <div class="d-flex justify-content-between" style="margin-top: 10px; padding-left: 0px; padding-right: 25px;">
                            <p style="margin-top: 7px;"><b>If you want to add book(s) to your order...</b></p>
                            <a class="btn" style="background-color: #1c53a4; color: #ffffff" href="./products.php">Go to Products Page</a>
                        </div>
                        <hr style="color: #0d3a83; margin-top:25px; width:580px">
                        <div class="d-flex justify-content-between" style="margin-top: 10px; padding-left: 0px; padding-right: 25px;">
                            <p style="margin-top: 7px;"><b>If you want to remove book(s) from your order...</b></p>
                            <a class="btn" style="background-color: red; color: #ffffff" href="./shopping-cart.php">Go to Shopping Cart</a>
                        </div>
                    </div>

                    <br><br><br><br>
                    <div class="row text-center" style="margin: 15px; padding: 10px; margin-right: 35px; color: #0d3a83; margin-bottom: 50px; border: 2px solid #0d3a83; border-radius: 5px; ">
                        <h3>Make sure you are always informed about new offers and that you receive benefits for loyal customers.<br>All you need to do is register!</h3>
                        <br>
                        <p>Follow the link below...</p>
                        <br><br>
                        <a class="btn" style="background-color: #1c53a4; color: #ffffff; width:200px; margin-left:150px; margin-top: 20px;" href="./shopping-cart.php">REGISTER</a>
                    </div>
                    <br><br>
                    <div class="row" style="margin: 15px; color: #1c53a4;">
                        <div class="row text-center" style="padding: 10px; background-color: #5eac1b; color: #ffffff; margin-top: 5px; ">
                            <h3>Anyhow...<br><b>THANK YOU FOR YOUR TRUST!</b></h3>
                        </div>
                    </div>
                </div>
    
                <div class="col-6 mb-5">
    
                    <div class="row text-center" style="margin: 15px; padding: 10px; background-color: #5eac1b; color: #ffffff; ">
                        <h3>If you are satisfied with your choice, fill out the form below...</h3>
                    </div>
                    <br><br><br>
                    <form class="p-4" action="./checkout.php" method="post" style="color: #0d3a83; font-weight: bold;">
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                            <?php if (!empty($systemErrors['name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['name']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group"  style="margin-top: 10px;">
                            <label for="last-name">Last name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Enter your last name" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
                            <?php if (!empty($systemErrors['last_name'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['last_name']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group"   style="margin-top: 10px;">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                            <?php if (!empty($systemErrors['email'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="row"  style="margin-top: 10px;">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="street">Address of residence</label>
                                    <input type="text" class="form-control" id="street" placeholder="Enter your street and number" name="street" value="<?php echo htmlspecialchars($street); ?>">
                                    <?php if (!empty($systemErrors['street'])) { ?>
                                        <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['street']); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone">Phone number</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                                    <?php if (!empty($systemErrors['phone'])) { ?>
                                        <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['phone']); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row"   style="margin-top: 10px;">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" value="<?php echo htmlspecialchars($city); ?>">
                                    <?php if (!empty($systemErrors['city'])) { ?>
                                        <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['city']); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="zip">ZIP code</label>
                                    <input type="text" class="form-control" id="zip" placeholder="Enter your ZIP code" name="zip" value="<?php echo htmlspecialchars($zip); ?>">
                                    <?php if (!empty($systemErrors['zip'])) { ?>
                                        <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['zip']); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"   style="margin-top: 10px;">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" placeholder="Comment" name="message"><?php echo htmlspecialchars($message); ?></textarea>
                            <?php if (!empty($systemErrors['message'])) { ?>
                                <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['message']); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-check mb-5"  style="margin-top: 10px;">
                            <input type="checkbox" name="rights" value="success" class="form-check-input" id="rights" 
                                <?php if ($rights == 'success') {
                                    echo htmlspecialchars("Checked");
                                } ?>>
                            <label class="form-check-label" for="rights">Do you know and agree with customer rights?</label>
                            <?php if (!empty($systemErrors['rights'])) { ?>
                                <small class="form-text text-danger"><?php echo "<br>" . htmlspecialchars($systemErrors['rights']); ?></small>
                            <?php } ?>
                        </div>
                        <br><br><br>
                        <div div class="row">
                            <button type="submit" class="btn col-12" style="background-color: #5eac1b; color: #ffffff;" name="buy" value="yes">Buy</button>
                        </div>
                    </form>
                </div>
    
            </div>
                
        </section>

    </div>
</main>