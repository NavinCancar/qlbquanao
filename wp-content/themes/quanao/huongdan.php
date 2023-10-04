<?php
    /* Template name: hướng dẫn */
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

        <div class=" px-xl-5">
            <ul>
                <b>Chỉ cần ngồi ở nhà bạn cũng có thể dễ dàng mua hàng chỉ với vài thao tác đơn giản sau: </b>
                <li>
                    <b>Cách 1: </b> Gọi điện thoại đến tổng đài của Fancy: 090 1800 888 (Phím 7) sẽ luôn có nhân viên
                    tư vấn
                    của Fancy hỗ trợ quý khách mua được những sản phẩm vừa ý.
                </li>
                <li>
                    <b>Cách 2: </b> Đặt mua online trên Website: fancy.com.vn
                </li>
            </ul>
            <div>
                <b class="text-danger mt-2">Bước 1: Đăng ký tài khoản:</b>
                <p>Bấm chọn "Đăng Ký" để đăng ký tài khoản Fancy</p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">
                <p>Sau đó bạn nhập tên và email vào để đăng ký. Sau khi đăng ký bạn sẽ nhận được email xác nhận.
                </p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">
                <p>Bạn vào xác nhận và để đổi mật khẩu là đã đăng ký thành công</p>
            </div>
            <div>
                <b class="text-danger mt-2">Bước 2: Tìm sản phẩm muốn mua bằng nhiều cách như:</b>
                <p> Cách 1: Bấm vào danh mục sản phẩm: Quần jean/ Áo Thun/ Váy để chọn sản phẩm cần mua.</p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">
                <p> Hoặc bấm vào trang "Sản Phẩm để tìm sản phẩm tại đây"
                </p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">

            </div>
            <div>
                <b class="text-danger mt-2">Bước 3: Chọn thông tin sản phẩm:</b>
                <p>Để mua sản phẩm, bạn chọn các thông tin sau: màu + size + số lượng sản phẩm cần đặt</p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">
                <p> Sau đó chọn <span><b>"Thêm vào giỏ hàng"</b></span> hoặc <span><b>"Mua ngay"</b></span>
                </p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">

            </div>
            <div>
                <b class="text-danger mt-2">Bước 4: Vào Giỏ hàng:</b>
                <p>Tại đây bạn có thể xóa sản phẩm, thay đổi số lượng, màu sắc và size của sản phẩm. Sau khi thay đổi
                    xong bạn bấm vào <span><b>"Tiến hành thanh toán"</b></span></p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">
            </div>
            <div>
                <b class="text-danger mt-2">Bước 5: Thanh toán:</b>
                <p>Tại đây bạn nhập đầy đủ các thông tin và chọn phương thức thanh toán sau đó bấm <span><b>"Đặt
                            hàng"</b></span></p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">
                <p>Sau khi đặt hàng thanh công hệ thống sẽ gửi cho bạn 1 Email về chi tiết các sản phẩm bạn đã đặt va
                    thông tin mua hàng</p>
                <img src="<?php bloginfo('stylesheet_directory') ?>/img/dangky.jpg" alt="Image" style="width: 70rem;">
            </div>

        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <!-- Content End -->
</main>
<?php get_footer() ?>