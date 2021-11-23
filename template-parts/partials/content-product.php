<?php
    $product = wc_get_product($args['product']);
    $is_two_price = $product->get_sale_price() && $product->get_regular_price();
    if($is_two_price){
        $discount =  $product->get_regular_price() - $product->get_sale_price();
        $discount =  '-'.floor(($discount /  $product->get_regular_price()) * 100).'%';
    }
?>
<div class="product position-relative overflow-hidden border rounded">
    <?php if($is_two_price): ?>
        <p style="font-size:12px" class="fw-bold discount py-0 px-1"><?= $discount; ?></p>
    <?php endif ?>
    <p class="new-tag p-0 fw-bold px-1" style="font-size:10px">NEW!</p>

    <a class="d-inline-block" href="<?= esc_url($product->get_permalink()) ?>">
        <img class="d-inline-block" src="<?= wp_get_attachment_image_src($product->get_image_id(), 'woocommerce_thumbnail')[0] ?>" alt="<?= $product->get_title() ?>">
    </a>

    <a class="mx-2 text-secondary text-decoration-none" href="<?= esc_url($product->get_permalink()) ?>">
        <?= $product->get_title() ?>
    </a>

    <div class="d-flex text-secondary justify-content-between mx-2">
        <?php if($is_two_price): ?>
        <p><?= $product->get_sale_price() ?></p>
        <p><del> <?= $product->get_regular_price() ?> </del></p>
        <?php else: ?>
            <p><?= $product->get_price() ?></p>
        <?php endif ?>
    </div>
    <div class="mx-2 mb-2">
        <!-- <a href="?add-to-cart=<?// =$product->get_id(); ?>" class="btn btn-outline-warning w-100">
            Add to Cart
        </a> -->

        <a href="?add-to-cart=<?=$product->get_id(); ?>" data-quantity="1" 
        class="btn btn-outline-warning w-100 button product_type_simple add_to_cart_button ajax_add_to_cart added" 
        data-product_id="<?=$product->get_id(); ?>" 
        data-product_sku="woo-beanie" aria-label="Add “Beanie” to your cart" rel="nofollow">Add to cart</a>
    </div>
</div>