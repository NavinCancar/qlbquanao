<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
	<!-- Google Analytics -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YPVYHBTNX4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-YPVYHBTNX4');
    </script>
    
    <?php wp_head(); ?>

    <!-- Favicon -->
    <link href="<?php bloginfo('stylesheet_directory') ?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;200;300;400;500;600;700;800;900&family=Sawarabi+Gothic&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('stylesheet_directory') ?>/css/style.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <!-- Topbar Start -->
    <header>
        <div class="container-fluid">
            <div class="row bg-secondary py-2 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark" href="">fancy05@gmail.com</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">+012 345 67890</a>

                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-dark pl-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center py-3 px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a href="<?php bloginfo('url') ?>" class="text-decoration-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">FANCY</span>Shop</h1>
                    </a>
                </div>
                <div class="col-lg-6 col-6 text-left">
                    <form role="search" method="get" class="woocommerce-product-search" action="http://localhost/qlbquanao/">
                        <div class="input-group">
                            <input type="search" id="woocommerce-product-search-field-0 search-field" class="form-control" placeholder="Search for products" name="s" title="Search for products">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text bg-transparent text-primary" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                            <input type="hidden" name="post_type" value="product">
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-3 col-6 text-right">
                    <a href="<?php bloginfo('stylesheet_directory') ?>/gio-hang" class="btn border">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <span class="badge">0</span>
                    </a>
                    <a href="<?php bloginfo('stylesheet_directory') ?>/tai-khoan" class="btn border">
                        <i class="fas fa-user-circle text-primary"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <div class="container-fluid">
            <div class="row border-top px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                        data-toggle="collapse" href="#navbar-vertical"
                        style="height: 65px; margin-top: -1px; padding: 0 30px;">
                        <h6 class="m-0">Danh mục sản phẩm</h6>
                        <i class="fa fa-angle-down text-dark"></i>
                    </a>
                    <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                        id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                        <div class="navbar-nav w-100 overflow-hidden">
                            <?php
                                $args = array(
                                    'type'          => 'product',
                                    'child_of'      => 0,
                                    'parent'        => 0,
                                    'hide_empty'    => 0,
                                    'taxonomy'      => 'product_cat'
                                );
                                $categories = get_categories( $args );
                                foreach ( $categories as $category ) { ?>
                            <a href="<?php echo get_term_link($category->slug, 'product_cat');?>"
                                class="nav-item nav-link"><?php echo $category->name ; ?></a>
                            <?php } ?>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0" style="height: 100%;">
                        <a href="" class="text-decoration-none d-block d-lg-none">
                            <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                    class="text-primary font-weight-bold border px-3 mr-1">FANCY</span>Shop</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <?php wp_nav_menu( 
                                        array( 
                                            'theme_location' => 'header-main', 
                                            'container' => 'false', 
                                            'menu_id' => 'header-main', 
                                            'menu_class' => 'menu'
                                        ) 
                                    ); 
                                ?>
                            </div>
                            <div class="navbar-nav ml-auto py-0">
                                <ul>
                                    <!-- <li><a href="<?php// bloginfo('stylesheet_directory') ?>/dang-nhap"
                                            class="nav-item nav-link">Đăng ký</a></li> 
                                    <li><a href="<?php bloginfo('stylesheet_directory') ?>/tai-khoan"
                                            style="font-size:1.5rem" class="nav-item nav-link"><i
                                                class="fas fa-user-circle"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
        <script src="//code.tidio.co/qvhtyxcdbgpqsqmlr6eyxvopljlrwfhp.js" async></script>
    </header>