

<main class="mt-5">
    <div class="container">

        <section class="mb-5 row">
            <div class="row text-center" style="background-color: #1c53a4; color: #ffffff; margin-left: 1px; margin-bottom: 5px; padding: 10px">
                <h3><?php echo htmlspecialchars($product->author); ?></h3>
                <hr>
                <h2><b><?php echo htmlspecialchars($product->title); ?></b></h2>
            </div>
            
            <div class="d-flex justify-content-center mt-5"  style="background-color: #5eac1b; padding: 50px">
                
                <div class="col-2" style="padding:3px; margin-top: 5px;">
                    <div>
                        <img src="<?php echo htmlspecialchars($product->img); ?>" class="card-img-top" alt="..." >
                    </div>
                </div>
            
                <div class="col-4" style="padding:3px;">
                    <div class="col-7">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;">Category: </span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;"><?php echo htmlspecialchars(ucfirst($product->category)); ?></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;">Type:  </span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;"><?php echo htmlspecialchars(ucfirst($product->type)); ?> </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;">On stock: </span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;"><?php echo htmlspecialchars(ucfirst($product->stock)); ?> </span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;">Price:</span>
                            </div>
                            <input name="price" disabled type="text" class="form-control" style="background-color: #1c53a4; color: #ffffff;" value="<?php echo htmlspecialchars($product->price); ?>" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;">$</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <form method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;">Quantity:</span>
                                </div>
                                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="quantity" value="1">
                                <div class="input-group-append">
                                    <span class="input-group-text" style="background-color: #1c53a4; color: #ffffff;">QTY</span>
                                </div>
                            </div>
                            <?php if(!empty($systemErrors['quantity'])) { ?>
                            <div class="error-msg text-danger">
                                <?php echo htmlspecialchars($systemErrors['quantity']) ?>
                            </div>
                            <?php } ?>
                            <input hidden name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                            <button type="submit" class="btn" style="background-color:#00bfff">Add to Cart</button>
                        </form>
                    </div></div>
                    <div class="col-6" style="color: #ffffff">
                        <h3 style="text-decoration: underline">Description:</h3>
                        <p><?php echo htmlspecialchars($product->description); ?></p>
                    </div>
                
            </div>
        </section>

        <section class="mb-5">
            <div class="d-flex justify-content-around mt-5">
                <a class="btn" style="background-color: #81c449;color: #ffffff;" href="./single.php?product=<?php echo htmlspecialchars($product->getPrevProductId()); ?>">PREV</a>
                <a class="btn" style="background-color: #81c449;color: #ffffff;" href="./single.php?product=<?php echo htmlspecialchars($product->getNextProductId()); ?>">NEXT</a>
            </div>
        </section>





        <section class="mb-5 row" >
            <div class="row text-center" style="background-color: #1c53a4; color: #ffffff; margin: 5px; margin-bottom: 20px; padding:10px"><h4><b>Related products</b></h4></div>
                <?php
                foreach ($relatedProducts as $singleRelated) { ?>
                    <article class="col-4 row text-center" style="color:  #1c53a4; margin: 0px" >
                            <div class='col-4' style="padding-left: 30px">
                                <img src="<?php echo htmlspecialchars($singleRelated->img); ?>" alt="" width="130px">
                            </div>
                            <div class="col-1"></div>
                            <div class='col-7' style="padding-top:10 px">
                                <h5><b><?php echo htmlspecialchars($singleRelated->title); ?></b></h5>
                                <p style="padding:3px">PRICE: <?php echo htmlspecialchars($singleRelated->price); ?> $</p>
                                <a class="btn" style="background-color: #81c449; color: #ffffff" href="./single.php?product=<?php echo htmlspecialchars($singleRelated->id); ?>">Show Product</a>
                            </div>
                    </article>
                <?php } ?>
        </section>
    </div>
</main>