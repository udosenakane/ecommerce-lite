<?php
    $products = wc_get_products([
        'orderby' => 'date',
        'limit' => 18,
        'return' => 'ids',
        'paginate' => true,
    ]);
?>
<div class="container-fluid my-3">

<?php
// print_r(array_chunk($products->products, 5));

 foreach(array_chunk($products->products, 6) as $chunk): ?>
<div class="row">
<?php foreach($chunk as $product): ?>
        <div class="col-md-2 mb-3">
            <?php 
              get_template_part('template-parts/partials/content', 'product', ['product'=> $product]);
            ?>
        </div>
    <?php endforeach ?>
    </div>

<?php endforeach ?>

</div>
