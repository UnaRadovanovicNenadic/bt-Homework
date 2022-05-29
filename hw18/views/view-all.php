<main class="container-fluid">
    <div class="row">
        <form action="all-products-page.php" class="d-flex" method='GET'>
            <select class="form-select" name="sort">
	            <?php foreach (array('' => 'Select sorting...', 'price-asc' => 'Ascending price', 'price-desc' => 'Descending price') as $value => $label) { ?>
	            	<option <?php if (!empty($_GET['sort']) && $value == $_GET['sort']) echo 'selected'; ?> value="<?php echo $value; ?>"><?php echo $label ?></option>
	            <?php } ?>
            </select>

	        <div class="d-flex">
	            <input class="form-control me-2" type="search" name="term" placeholder="Search..." value="<?php if(!empty($_GET['term'])) echo $_GET['term']; ?>" aria-label="Search">
	            <input class="btn btn-outline-success" type="submit" value="Submit">
	        </div>
        </form>
    </div>

    <div class="row">
        <?php foreach ($products as $key=>$product) { ?>
        <div class="card col-4">
            <div class="row g-0" class="prod_align">
                <div class="title">
                    <h5 class="card-title"><?php echo $product['title']; ?></h5>
                </div>
                <div class="col-md-8" class="prod_img" >
                    <img src="<?php echo $product['img'] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-4">
                    <div class="card-body" >
                        <p class="card-text">Price: $<?php echo $product['price']; ?></p>
                        <a class="btn btn-success" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Show Product</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</main>

