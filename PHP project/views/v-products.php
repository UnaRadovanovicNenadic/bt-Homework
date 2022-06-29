
<main class="mt-5">
    <div class="container">

        <section class="mb-5" >
            <form class="row" action="./products.php" method="get">
                <div class="col-2">
                    <select name="sort" class="form-select">
                        <option <?php
                                if ($sort == "") {
                                    echo htmlspecialchars("Selected");
                                } ?> value="">None</option>
                        <option <?php if ($sort == \Models\Product\Product::ORDER_BY_PRICE_ASC) {
                                } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_ASC); ?>">By price asc</option>
                        <option <?php if ($sort == \Models\Product\Product::ORDER_BY_PRICE_DESC) {
                                    echo htmlspecialchars("Selected");
                                } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_DESC); ?>">By price desc</option>
                    </select>
                </div>
                <div class="col-3" style="margin-right:5px; margin-left: 200px"></div>
                    <input class="col-3" type="text" name="term" placeholder="Enter author, title, category or book type" value="<?php echo htmlspecialchars($term); ?>">
                    <button type="submit" class="btn col-2" style="background-color: #0d3a83; color: #ffffff">Search</button>
                <hr class="mt-3">
            </form>
        </section>

        <section class="mb-5">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <article class="single-product col-5 row mb-5" style="background-color: #1c53a4; color: #ffffff; margin-left:55px; margin-right:50px; margin-top:0.5%">
                        <div class='col-5 text-center' style="padding: 20px">
                            <img src="<?php echo htmlspecialchars($product->img); ?>" alt="" width="200" >
                        </div>
                        <div class='col-7 text-center'style="padding: 20px" >
                            <p><?php echo htmlspecialchars($product->author); ?></p>
                            <br>
                            <h4><?php echo htmlspecialchars($product->title); ?></h4>
                            <hr>
                            <p>Type: <?php echo htmlspecialchars(ucfirst($product->type)); ?></p>
                            <p>Price: $ <?php echo htmlspecialchars($product->price); if ($product->price < 5) echo 
                            "<p style='background-color:red; margin-left: 3px; width: 260px; padding:5px'>Special price!</p>"?></p>
                            <div style="margin-top:15px">
                                <a class="btn" style="background-color: #81c449; margin-right:15px" href="./single.php?product=<?php echo htmlspecialchars($product->id) ?>">Show Product</a>
                                <button form="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" class="btn" style="background-color:#00bfff; margin-left:15px">Add to Cart</button>
                                <form id="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" action="./products.php" method="post">
                                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                                </form>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </section>

        <section class="mb-5">
            <div class="text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination d-flex justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
</main>