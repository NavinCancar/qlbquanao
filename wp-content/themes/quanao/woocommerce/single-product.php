<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

//CHI TIẾT SẢN PHẨM

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<!-- Page Header Start 
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Chi tiết sản phẩm</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Contact</p>
        </div>
    </div>
</div>-->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="d-inline-flex pb-3">
            <p class="m-0"><a href="' . esc_url( home_url( '/' ) ) . '">Trang chủ</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0"><a href="' . esc_url( home_url( '/san-pham' ) ) . '">Sản phẩm</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0"><?php echo get_the_title(); ?></p>
        </div>
        <?php
            /**
            * woocommerce_before_main_content hook.
            *
            * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
            * @hooked woocommerce_breadcrumb - 20
            */
            do_action( 'woocommerce_before_main_content' );
        ?>

        <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>

        <?php wc_get_template_part( 'content', 'single-product' ); ?>

        <?php endwhile; // end of the loop. ?>
        </div>
    </div>
</div>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */