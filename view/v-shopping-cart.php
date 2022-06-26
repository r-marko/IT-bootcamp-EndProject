<main class="m-3 mt-5">
    <div class="container">
        <form method="POST" action="shopping-cart-page.php">
            <table class="table">
                <thead>
                    <tr>
                        <th><img src="public/theme/img/layout/Moto Shop logo.png" width="50px" alt="logo"></th>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($items as $item){
                        $subtotal = $item->getSum();
                        $total += $subtotal;
                     ?>
                    <tr>
                        <td><input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($item->getProduct()->getId()); ?>"></td>
                        <td><?php echo htmlspecialchars($item->getProduct()->getTitle()); ?></td>
                        <td><?php echo htmlspecialchars($item->getQuantity()); ?></td>
                        <td><?php echo htmlspecialchars($item->getProduct()->getPrice()); ?></td>
                        <td><?php echo htmlspecialchars($subtotal); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"><button class="btn btn-danger m-1" type="submit">REMOVE</button></td>
                        <td>Total:</td>
                        <td><?php echo htmlspecialchars($total); ?> RSD</td>
                    </tr>
                </tfoot>
            </table>
            <div>
                <a class="btn btn-primary" href="./checkout-page.php">Checkout</a>
            </div>
        </form>
    </div>
</main>