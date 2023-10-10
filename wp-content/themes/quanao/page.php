<!--Hiển thị ndung 1 trang: Giới thiệu, đăng ký, đăng nhập, thanh toán, liên hệ, giỏ hàng, tài khoản...-->
<?php get_header() ?>
<main>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3"><?php the_title(); ?></h1>
            <div class="d-inline-flex">
                <?php custom_breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Content Start -->
    <div class="container-fluid pt-5">

        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php setpostview(get_the_ID()); ?>

        <div class="container-fluid pt-2">
            <?php the_content(); ?>
          
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <!-- Content End -->
</main>
<?php get_footer() ?>