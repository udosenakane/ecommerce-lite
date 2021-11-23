<?php 
    get_header(); 
    get_template_part('template-parts/partials/content', 'carousel');
    $new_arrivals = wc_get_products([
        'orderby' => 'date',
        'limit' => 5,
        'return' => 'ids'
    ]);

    // print_r($new_arrivals);
?>

<div class="container-fluid mb-5">
    <div class="row">
        <h2 class="text-center text-secondary mb-5">New Arrivals</h2>
        <?php foreach($new_arrivals as $product): ?>
        <div class="col-md mb-3">
            <?php 
                get_template_part('template-parts/partials/content', 'product', ['product'=> $product]);
            ?>
        </div>
        <?php endforeach ?>
    </div>
</div>

<?php get_footer() ?>