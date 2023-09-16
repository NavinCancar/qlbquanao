<?php global $product; ?>
<pre>
    <?php //print_r( $product) ?>
</pre>
<div class="card product-item border-0 mb-4">
    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array( 'class' =>'img-fluid w-100') ); ?>
    </div>
    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
        <h6 class="text-truncate mb-3"><?php the_title(); ?></h6>
        <div class="d-flex justify-content-center">
            <?php if ($product->is_on_sale()) echo 'giảm'?>
            <h6><?php echo $product->get_price_html(); ?></h6>
            <!--$product->get_regular_price(); && $product->get_sale_price(); cách lấy giá từng cái nhưng không có format-->
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between bg-light border">
        <a href="<?php the_permalink(); ?>" class="btn btn-sm text-dark p-0"><i
                class="fas fa-eye text-primary mr-1"></i>Xem </a>
        <a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>" class="btn btn-sm text-dark p-0"><i
                class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
    </div>
</div>