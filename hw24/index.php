<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <link rel="stylesheet" href="./public/theme/css/custom.css">
    <title>DEMO BOOK SHOP</title>
</head>
<body>
                                <!-- START HEADER-->
    <header>
        <nav class="navbar navbar-expand-lg text-bg-success p-3">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">BOOKSHOP</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav" >
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact us</a>
                    </li>
                  </ul>
                </ul>
              </div>
            </div>
          </nav>
    </header>
                                <!-- END HEADER-->

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



                                                                <!-- START FOOTER--> 
                                                                <footer>
        <nav class="navbar navbar-expand-lg text-bg-success p-3">
            <div class="footer">
                <ul class="nav justify-content-center">
                  <li class="foot-item">
                    <p class="ref">Reference</p>
                    <div class="list-group">
                        <a href="https://getbootstrap.com" class="list-group-item list-group-item-action list-group-item-success">Bootstrap</a>
                        <a href="https://www.php.net/" class="list-group-item list-group-item-action list-group-item-success">PHP</a>
                        <a href="https://www.w3schools.com/" class="list-group-item list-group-item-action list-group-item-success">w3schools</a>
                        <a href="https://www.youtube.com/" class="list-group-item list-group-item-action list-group-item-success">YouTube</a>
                    </div>
                  </li>
                  <li class="foot-item">
                    <p class="ref">Customer support</p>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-success">How to order?</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-success">Payment methods</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-success">Shipping services</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-success">Reclamations & refund</a>
                    </div>
                  </li>
                  <li class="foot-item">
                    <p class="ref">Follow us</p>
                    <div class="list-group">
                        <a href="https://www.facebook.com/" class="list-group-item list-group-item-action list-group-item-success">Facebook</a>
                        <a href="https://www.instagram.com/" class="list-group-item list-group-item-action list-group-item-success">Instagram</a>
                        <a href="https://www.linkedin.com/" class="list-group-item list-group-item-action list-group-item-success">Linked In</a>
                        <a href="https://twitter.com/" class="list-group-item list-group-item-action list-group-item-success">Twitter</a>
                    </div>
                  </li>
                </ul>
            </div>
          </nav>
    </footer>
                                 <!-- END FOOTER-->

    <script src="./public/theme/js/bootstrap.min.js"></script>
</body>
</html>

