<?php get_header() ?>
<main>
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 pb-3">
                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/poster.jpg" alt="Image">
            </div>
            <div class="col-lg-9 pb-3">
                <?php get_template_part('slider') ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">SẢN PHẨM NỔI BẬT</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            <?php //tax_query chỉ dành cho sp nổi bật
                    $tax_query[] = array(
                        'taxonomy' => 'product_visibility',
                        'field'    => 'name',
                        'terms'    => 'featured',
                        'operator' => 'IN',
                    );
                ?>
            <?php $args = array( 'post_type' => 'product','posts_per_page' => 4,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <?php get_template_part('content/item_product')?>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>

            <!--<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="<php bloginfo('stylesheet_directory') ?>/img/product-1.jpg" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                            <div class="d-flex justify-content-center">
                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>-->
        </div>
    </div>
    <!-- Products End -->
    <!-- danh muc 1 -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">ÁO THUN</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            <?php
            $cat1 = get_term_by('id',15,'product_cat');
            $args = array( 
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'ignore_sticky_posts' => 1,
                    'product_cat' => $cat1->slug
                ); 
            ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <?php get_template_part('content/item_product')?>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <!-- danh muc 1 End -->
    <!-- danh muc 1 -->
    <div class="container-fluid pt-5">
        <?php  
            $cat2 = get_term_by('id',26,'product_cat');
        ?>
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">QUẦN JEAN NỮ</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            <?php $args = array( 
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'ignore_sticky_posts' => 1,
                    'product_cat' => $cat2->slug
                ); 
            ?>
            <?php $getposts = new WP_query( $args);?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <?php get_template_part('content/item_product')?>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <!-- danh muc 1 End -->
</main>
<?php get_footer() ?>

<!--Note: Ngoài ra có thể get_sidebar() tuy nhiên phần này chỉ dùng cho trang cửa hàng nên không xử lý.
Các trường hợp còn lại get_template_part('<tền file không .php>')-->