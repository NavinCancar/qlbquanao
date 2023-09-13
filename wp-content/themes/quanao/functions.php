<?php
function my_custom_wc_theme_support(){
    add_theme_support( 'woocommerce');
    add_theme_support('wc-product-gallery-lightbox' );
    add_theme_support('wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'my_custom_wc_theme_support');


function initTheme(){
    //Đưa trình soạn thảo của wrodpress về phiên bản cũ
    add_filter('use_block_editor_for_post', '__return_false');

    //Đăng ký menu cho website: https://huykira.net/webmaster/wordpress/huong-dan-lay-menu-va-sidebar.html
    register_nav_menu('header-top',__( 'Menu top' ));
    register_nav_menu('header-main',__( 'Menu chính' ));
    register_nav_menu('footer-menu',__( 'Menu footer' ));

    //Đăng ký sidebar cho website   
    if (function_exists('register_sidebar')){
        register_sidebar(array(
            'name'=> 'Cột bên',
            'id' => 'sidebar',
        ));
    }

    //https://huykira.net/webmaster/wordpress/code-hay-trong-lap-trinh-theme-woocommecre.html
    //Tính lượt view: https://huykira.net/webmaster/wordpress/code-hay-lap-trinh-theme-wordpress.html
    function setpostview($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    function getpostviews($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }
}
add_action( 'init', 'initTheme');
?>
