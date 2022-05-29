
<main>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="<?php echo htmlspecialchars($product['img']); ?>"  width=350 height=430px>
            </div>
            <div class="col-6">
                <div class="row">
                    <h1 class="card-title mb-4"><?php echo htmlspecialchars($product['title']); ?></h1>
                </div>
                <div class="row">
                    <p class="card-text">Author: <?php echo htmlspecialchars($product['author']); ?></p>
                </div>
                <div class="row">
                    <p class="card-text">Category: <?php echo htmlspecialchars($product['category']); ?></p>
                </div>
                <div class="row">
                    <p class="card-text">Edition type: <?php echo htmlspecialchars($product['type']); ?></p>
                </div>
                <div class="row">
                    <p class="card-text">Price: $ <?php echo htmlspecialchars($product['price']); ?></p>
                </div>
                <div class="row">
                    <p class="card-text">Quantity: 
                        <form action="./checkout-page.php?stranica=<?php echo $product['id']; ?>" method='GET'>
                            <input type='number' name='quant'>
                            <div class="row">
                                <button type='submit'><a href="./checkout-page.php?stranica=<?php echo $product['id']; ?>" class="btn btn-success">BUY</a></button>
                            </div>
                        </form>
                    </p>
                </div>

                <div class="row">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                    </nav>
                </div>
        </div>
        <div class="row">
                <p><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
        <div class="row">
            <?php 
            foreach ($relatedProducts as $singleRelated) { ?>
            <article class="single-product col-4 row mb-5">
                <div class='col-6'>
                    <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="100" height="150">
                </div>
                <div class='col-6'>
                    <span><?php echo htmlspecialchars($singleRelated['title']); ?></span>
                    <a class="btn btn-success" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>