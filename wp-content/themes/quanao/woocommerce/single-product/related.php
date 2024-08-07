<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

<section class="related products">

    <div class="text-center">
        <?php
					$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

					if ( $heading ) :
						?>
        <h2 class="section-title px-5"><span class="px-2"><?php echo esc_html( $heading ); ?></span></h2>
        <?php endif; ?>

    </div>
    <?php woocommerce_product_loop_start(); ?>
    <div class="row px-xl-5 pb-3">
        
        <?php foreach ( $related_products as $related_product ) : ?>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">    
        <?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
					?>

        <?php wc_get_template_part( 'content', 'product' );?>
        </div>
        <?php endforeach; ?>
    </div>



    <?php woocommerce_product_loop_end(); ?>

</section>
<?php
endif;

wp_reset_postdata();