                                <!-- START MAIN-->
      <main class='container'>
        <div class="row"> 

          <div class="col-6">
            <form action="" method="POST">
              <div class="row">
                <input type="text" name="name" placeholder="Enter your name...">
              <div class="row">
                <input type="text" name="last_name" placeholder="Enter your last name...">
              </div>
              <div class="row">
                <input type="text" name="email" placeholder="Enter your email address...">
              </div>
              <div class="row">
                <input type="text" name="phone" placeholder="Enter your your phone number...">
              </div>
              <div class="row">
                <input type="text" name="address" placeholder="Enter your street & number...">
              </div>
              <div class="row">
                <input class="col" type="text" name="city" placeholder="Enter your city of residence...">   
                <input class="col" type="text" name="zip" placeholder="Enter your ZIP code...">
              </div>
              <div class="row">
                <textarea  placeholder="Enter your comment" rows="3"></textarea>       
              </div>
              <div class="row">
                <input class="col-2" name="checkbox" id="checkbox" type="checkbox" value="" checked>
                <label for='checkbox' class="col-10">Do you agree with terms of purchase?</label>
              </div>
            </form>
          </div>
          
          <div class="col-6">
            <div class='row'>
              <div class="col-5">
                  <img src="<?php echo htmlspecialchars($product['img']); ?>"  width=100px height=150px>
              </div>
              <div class="col-7">
                <div class="row">
                  <p class="card-text">Title: <?php echo ($product['title']); ?></p>
                </div>
                <div class="row">
                  <p class="card-text">Author: <?php echo htmlspecialchars($product['author']); ?></p>
                </div>
                <div class="row">
                  <p class="card-text">Price: $ <?php echo htmlspecialchars($product['price']); ?></p>
                  <p class="card-text">Quantity: <?php echo $quantity?></p>
                </div>
                <div class="row">
                  <p class="card-text">Total price: $ <?php echo $product['price'] * $quantity?></p>
                </div>
              </div>
            </div>
          </div>

          <div>
            <button class="btn btn-success" type="submit" width='100px'>BUY</button>
          </div>
        </div>

      </main>
                                <!-- END MAIN-->