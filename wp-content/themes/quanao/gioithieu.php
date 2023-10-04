<?php
    /* Template name: giới thiệu */
?>
<?php get_header() ?>
<main>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3"><?php the_title(); ?></h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Content Start -->
    <div class="container-fluid pt-5">

        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php setpostview(get_the_ID()); ?>

        <div class="d-flex justify-content-center text-center">
            <div class="m-5">
                <h2 class="text-center"><b>Fancy là website thương mại điện tử đang được nhiều người sử dụng trong 5 năm
                        trở
                        lại đây.</b></h2>
                <h5 class="text-center mt-4">Ra mắt năm 2017, nền tảng thương mại Fancy được xây dựng nhằm cung cấp cho
                    người
                    dùng những trải
                    nghiệm
                    dễ dàng, an toàn và nhanh chóng khi mua sắm trực tuyến thông qua hệ thống hỗ trợ thanh toán và vận
                    hành
                    vững mạnh.</h5>

                <button type="button" class="btn btn-primary rounded-pill m-5 text-white">Tìm hiểu về Fancy</button>

                <div class="row pt-6">
                    <div class="col-6 mt-6 ">
                        <div class="card shadow p-3 mb-5  rounded bg-primary text-white" style="width: 35rem;">
                            <div class="card-body ">
                                <h5 class="card-title text-center"><b class="text-white">Mục tiêu của chúng tôi</b>
                                </h5>

                                <p class="card-text">Chúng tôi tin tưởng vào sức mạnh khai triển của công nghệ và mong
                                    muốn góp phần làm cho thế giới trở nên tốt đẹp hơn bằng việc kết nối cộng đồng người
                                    mua và người bán thông qua việc cung cấp một nền tảng thương mại điện tử.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-6">
                        <div class="card shadow p-3 mb-5  rounded bg-primary text-white" style="width: 35rem;">
                            <div class="card-body ">
                                <h5 class="card-title text-center"><b class="text-white">Định vị của chúng tôi</b> </h5>

                                <p class="card-text">Đối với người dùng trên toàn khu vực, Shopee mang đến trải nghiệm
                                    mua sắm trực tuyến tích hợp với vô số sản phẩm đa dạng chủng loại, cộng đồng người
                                    dùng năng động và chuỗi dịch vụ liền mạch.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shadow p-3 mb-5 rounded d-flex justify-content-center text-center">
                    <h4 class="text-center"><b>Trải nghiệm người dùng về website</b></h4>
                    <hp class="text-center mt-4">Mang lại cho khách hàng cảm nhận được những trải nghiệm tích cực, cảm
                        thấy hứng thú
                        và thỏa mãn. Dưới đây là những điểm mà Fancy mang lại cho khách hàng:
                    </hp>
                    <div class="col-4">
                        <div class="card border-0" style="width: 22rem;">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/img/gd.jpg" alt="Image"
                                style="width: 20rem; height:20rem" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Giao diện thân thiện dễ sử dụng</h5>
                                <p class="card-text">Một giao diện người dùng sáng sủa, dễ dàng hiểu và điều hướng có
                                    thể giúp người dùng dễ dàng tìm kiếm sản phẩm mà họ quan tâm.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card border-0" style="width: 22rem;">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/img/sale.jpg" alt="Image"
                                style="width: 20rem;height:20rem" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Chương trình khuyến mãi</h5>
                                <p class="card-text">Các ưu đãi, khuyến mãi và mã giảm giá thường diễn ra thường xuyên
                                    giúp người dùng mua được sản phẩm tốt với giá cực kỳ hợp lý.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card border-0" style="width: 22rem;">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/img/thanhtoan.jpg" alt="Image"
                                style="width: 20rem; height:20rem" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Thanh toán thuận tiện</h5>
                                <p class="card-text">Các tùy chọn thanh toán đa dạng và lựa chọn vận chuyển linh hoạt
                                    giúp tôi có thể chọn phương thức phù hợp nhất với nhu cầu và tài chính của khách
                                    hàng.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <!-- Content End -->
</main>
<?php get_footer() ?>