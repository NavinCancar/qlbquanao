<!--Hiển thị ndung 1 trang: Giới thiệu, đăng ký, đăng nhập, thanh toán, liên hệ, giỏ hàng, tài khoản...-->
<?php get_header() ?>
    <main>
        <!-- Content Start -->
        <div class="container-fluid pt-5">

            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php setpostview(get_the_ID()); ?>
                <div class="text-center mb-4">
                    <h2 class="section-title px-5"><span class="px-2"><?php the_title(); ?></span></h2>
                </div>

                <div class="container-fluid pt-2">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- Content End -->
    </main>
<?php get_footer() ?>