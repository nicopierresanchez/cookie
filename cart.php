<?php require 'inc/head.php'; ?>
<?php
if ($_SESSION['loginname'] === null) {
    header("location: login.php");
}
?>
<?php require 'inc/data/products.php'; ?>


<?php if (empty($_SESSION['list'])): ?>
    <h1>Your cart is empty</h1>
 
<?php else: ?>
    <section class="cookies container-fluid">
        <div class="row">
            <h1>Your shoppingcart</h1><br>
            <?php foreach ($_SESSION['list'] as $choices) { ?>
                <?php $number = array_count_values($choices); ?>
                <?php foreach ($number as $cookie => $count) { ?>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <figure class="thumbnail text-center">
                            <img src="assets/img/product-<?= $cookie; ?>.jpg" alt="<?= $catalog[$cookie]['name']; ?>" class="img-responsive">
                            <figcaption class="caption">
                                <h3><?= $catalog[$cookie]['name']; ?></h3>
                                <p><?= $catalog[$cookie]['description']; ?></p>
                                <p><?= 'Total = ' . $count ?></p>
                            </figcaption>
                        </figure>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </section>
<?php endif; ?>
<?php require 'inc/foot.php'; ?>