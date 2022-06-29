
<main class="mt-5">
    <div class="container" style="background-color: #0d3a83; color: #ffffff; margin-bottom: 50px; padding-top: 10px">
        <div class="text-center"><h2 style="text-decoration: underline;">SHOPPING CART</h2></div>
        <form action="shopping-cart.php" method="post" class="m-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="color: #ffffff;"><div class="text-center">#</div></th>
                        <th scope="col" style="color: #ffffff;"><div class="text-center">Book</div></th>
                        <th scope="col" style="color: #ffffff;"><div class="text-center">Price</div></th>
                        <th scope="col" style="color: #ffffff;"><div class="text-center">Quantity</div></th>
                        <th scope="col" style="color: #ffffff;"><div class="text-center">Subtotal</div></th>
                        <th scope="col" style="color: #ffffff;"><div class="text-center">Remove from cart</div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($items as $item) { ?>
                        <?php
                            $subtotal = $item->getSubtotal();
                            $total += $subtotal;
                            ?>
                        <tr>
                            <td><div class="text-center"><input type="checkbox" name="remove[]" style="margin-top: 15px; color: #ffffff;" value="<?php echo htmlspecialchars($item->getProduct()->id); ?>"></td>
                            <td><div style="color: #ffffff;"><?php echo "Author: " . htmlspecialchars($item->getProduct()->author); echo "<br>"; 
                            echo "Title: " . htmlspecialchars($item->getProduct()->title);?></div></td>
                            <td><div class="text-center" style="margin-top: 15px; color: #ffffff;"><?php echo htmlspecialchars($item->getProduct()->price); ?></div></td>
                            <td><div class="text-center" style="margin-top: 15px; color: #ffffff;"><?php echo htmlspecialchars($item->getQuantity()); ?></div></td>
                            <td><div class="text-center" style="margin-top: 15px; color: #ffffff;"><?php echo htmlspecialchars($subtotal); ?></div></td>
                            <td><div class="text-center"><button class="btn m-2" type="submit" style="background-color:red; color: #ffffff;">Remove</button></div></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td class="tg-0lax" colspan="3"></td>
                        <td class="tg-0lax"><div class="text-center" style="margin-top: 15px; color: #ffffff;"><b>TOTAL: </b></div></td>
                        <td class="tg-0lax"><div class="text-center" style="margin-top: 15px; color: #ffffff;"><b><?php echo "$" . htmlspecialchars($total); ?></b></div></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <div style="margin-bottom: 20px;">
                <a href="./checkout.php" class="btn m-2" style="background-color:#00bfff;  color: #ffffff; padding: 15px;">BUY</a></div>
            </div>
        </form>
    </div>
</main>