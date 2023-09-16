<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

    <?php do_action( 'woocommerce_product_meta_start' ); ?>

    <?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

    <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span
            class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

    <?php endif; ?>

    <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

    <?php do_action( 'woocommerce_product_meta_end' ); ?>
    <div>
        <h5 class="mt-3">Hướng Dẫn Chọn Size Cho Bạn</h5>
        <ol>
        </ol>
        <li>Size XS: vai 34, eo >=60, ngực 75, dài 80, mông 75</li>
        <li>Size S: vai 34, eo 66, ngực 84, dài 94, mông 80</li>
        <li>Size M: vai 35, eo 70, ngực 88, dài 95, mông 80</li>
        <li>Size L: vai 36, eo 74, ngực 92, dài 96, mông 96</li>
        <li>Size XL: vai 38, eo 80, ngực 95, dài 96, mông 100</li>
        </ol>
    </div>
</div>