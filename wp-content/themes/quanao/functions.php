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

//Điều khiển slider qua wordpress
//https://huykira.net/webmaster/wordpress/custom-post-type-trong-wordpress-dung-toolset.html
function slider_post_type(){
    $label = array(
        'name' => 'Ảnh slider', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh slider' //Tên post type dạng số ít
    );
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng slider', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail'
        ),
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-format-gallery', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('slider', $args); //Tạo post type với slug tên là slider và các tham số trong biến $args ở trên
    //cụm slider này phải nhớ để vào wordpress gọi
 
}
add_action('init', 'slider_post_type');

function custom_remove_action_woo(){
    remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
}
add_action( 'init', 'custom_remove_action_woo');

//====================================================================================

function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Tên sidebar', 'text_domain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Mô tả sidebar', 'text_domain' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

//===================================================================================
function custom_breadcrumbs() {
    $breadcrumbs = '';

    if ( ! is_home() && ! is_front_page() || is_paged() ) {
        $breadcrumbs .= '<p class="m-0"><a href="' . esc_url( home_url( '/' ) ) . '">Trang chủ</a></p>';

        if ( is_shop() ) {
            $breadcrumbs .= '<p class="m-0 px-2">-</p>';
            $breadcrumbs .= '<p class="m-0">Sản phẩm</p>';
        } elseif ( is_product_category() ) {
            $breadcrumbs .= '<p class="m-0 px-2">-</p>';
            $breadcrumbs .= '<p class="m-0">' . single_cat_title( '', false ) . '</p>';
        } elseif ( is_singular( 'post' ) ) {
            $category = get_the_category();
            if ( $category ) {
                $category_id = $category[0]->cat_ID;
                $breadcrumbs .= '<p class="m-0 px-2">-</p>';
                $breadcrumbs .= get_category_parents( $category_id, true, '<p class="m-0"><p>' );
            }
            $breadcrumbs .= '<p class="m-0">' . get_the_title() . '</p>';
        } elseif ( is_singular( 'page' ) ) {
            $post = get_post();
            if ( $post->post_parent ) {
                $ancestors = get_post_ancestors( $post->ID );
                $ancestors = array_reverse( $ancestors );
                foreach ( $ancestors as $ancestor ) {
                    $breadcrumbs .= '<p class="m-0 px-2">-</p>';
                    $breadcrumbs .= '<p class="m-0"><a href="' . get_permalink( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a></p>';
                }
            }
            $breadcrumbs .= '<p class="m-0 px-2">-</p>';
            $breadcrumbs .= '<p class="m-0">' . get_the_title() . '</p>';
        } elseif ( is_search() ) {
            $breadcrumbs .= '<p class="m-0 px-2">-</p>';
            $breadcrumbs .= '<p class="m-0">Kết quả tìm kiếm cho "' . get_search_query() . '"</p>';
        } elseif ( is_404() ) {
            $breadcrumbs .= '<p class="m-0 px-2">-</p>';
            $breadcrumbs .= '<p class="m-0">404 Không tìm thấy trang</p>';
        }
    }

    echo $breadcrumbs;
}


//hiển thị sản phẩm xem gần đây
function viewedProduct(){
	session_start();
	if(!isset($_SESSION["viewed"])){
		$_SESSION["viewed"] = array();
	}
	if(is_singular('product')){
		$_SESSION["viewed"][get_the_ID()] = get_the_ID();
	}
}
add_action('wp', 'viewedProduct');