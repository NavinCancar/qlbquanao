<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FANCY SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/css.css">
</head>
<body>
    <header>
        <!-- header phan lien he -->
        <div class="text-dark" id="hd">
            <div class="row">
                <div class="col-6" >
                    <p class="m-2" id="hdtext"><i class="fa-solid fa-envelope"></i> nhom5@gmail.com &nbsp; Ι&nbsp;&nbsp;  <i class="fa-solid fa-phone"></i> 0987654321</p>
                </div>
                <div class="col-6">
                    <p class="m-2" id="hdicon">
                        <i class="fa-brands fa-facebook"></i> &nbsp; <i class="fa-brands fa-twitter"></i>&nbsp; <i class="fa-brands fa-square-instagram"></i>&nbsp; <i class="fa-brands fa-tiktok"></i>&nbsp; <i class="fa-brands fa-youtube"></i>
                    </p>
                </div>
            </div>
        </div>
        <!-- header phan logo, tim kiem, gio hang -->
        <div id="hdsd">
            <div class="row">
                <div class="col-3">
                    <div>
                        <a href="#" class="textlg"> 
                            <b style="display: inline;">FANCY</b><b style="display: inline; color: var(--dark);">&nbsp; Shop</b>
                        </a>
                    </div>
                </div>
                <div class="col-7">
                    <form action="#" class="m-2">
                        <div class="search">
                            <input class="border-0 text-black-50 mt-1" type="text" value=" Tìm kiếm sản phẩm" > 
                             <button type="submit" id="searchicon"> <i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-2" > 
                    <div id="hdicon1">
                       <a href="#"> <i class="fa-solid fa-heart"></i>
                        <p style="display: inline; color: black;">0</p> </a>
                        &nbsp; &nbsp; 
                     <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i>
                     <p  style="display: inline; color: black;">0</p></a> 
                    </div>
                </div>
            </div>
        </div>
        <!-- thanh dieu huong + banner -->
        <div id="hd3">
            <div class="row">
            <div class="col-3" id="dd">
                    <!-- danh muc san pham -->
                    <div class="dropdown">
                        <button type="button" class="btn  dropdown-toggle ddhd" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh mục sản phẩm
                          </button>
                       <ul id="dwul" class="dropdown-menu">
                        <li class="ddbody"><a class="dropdown-item" href="#">Áo thun</a></li>
                        <hr class="dwhr">
                        <li class="ddbody"><a class="dropdown-item" href="#">Jeans nữ</a></li>
                        <hr class="dwhr">
                        <li class="ddbody"><a class="dropdown-item" href="#">Áo sơ mi</a></li>
                        <hr class="dwhr"> 
                        <li class="ddbody"><a class="dropdown-item" href="#">Đầm & Váy</a></li>
                        <hr class="dwhr">
                        <li class="ddbody"><a class="dropdown-item" href="#">Áo Khoác</a></li>
                        <hr class="dwhr">
                        <li class="ddbody"><a class="dropdown-item" href="#">Áo len</a></li>
                        <hr class="dwhr">
                        <li class="ddbody"><a class="dropdown-item" href="#">Áo crotop</a></li>
                        <hr class="dwhr">
                       </ul>
                     </div>
               </div>
                <!-- banner + dieu huong -->
                <div class="col-9 container">
                    <div class="row" id="dieuhuong">
                        <div class="col-8">
                            <ul class="nav">
                                <li><a href="index.html">Trang Chủ</a></li>
                                <li><a href="#">Hàng Mới về</a></li>
                                <li><a href="#">Phong Cách</a></li>
                                <li><a href="contact.html">Liên Hệ</a></li>
                              </ul>
                              
                        </div>
                        <div class="col-4">
                            <ul class="nav" id="n2">
                                <li><a href="login_out.html">Đăng ký</a></li>
                                <li><a href="login_out.html">Đăng nhập</a></li>
                              </ul>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </header>
    <main>
        <!-- banner -->
        <div  class="row" id="banner">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" id="anhbanner">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/carousel-1.jpg" class="d-block w-100" alt="carousel-1">
                                <div class="text">
                                    <p>Sale 10% cho đơn hàng đầu tiên</p>
                                    <h2>FANCY Shop for all</h2>
                                </div>
                              </div>
                              <div class="carousel-item" id="anhbanner">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/img/carousel-2.png" class="d-block w-100" alt="carousel-2">
                                <div class="text">
                                    <p>Sale 10% cho đơn hàng đầu tiên</p>
                                    <h2>FANCY Shop for all</h2>
                                </div> 
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
        <!-- st icon -->
        <section class="container">
            <div class="row" id="st1">
                <div class="col-lg-3 col-md-6 col-sm-12" >
                    <div class="d-flex align-items-center  " id="st1border">
                        <h2 class="fa fa-check "></h2>
                        <h5 class="font-weight-semi-bold "> Sản Phẩm chất lượng</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 " >
                    <div class="d-flex align-items-center "id="st1border" >
                        <h2 class="fa fa-shipping-fast  "></h2>
                        <h5 class="font-weight-semi-bold "> Miễn phí giao hàng</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 " >
                    <div class="d-flex align-items-center " id="st1border">
                        <h2 class="fas fa-exchange-alt  "></h2>
                        <h5 class="font-weight-semi-bold "> Đổi hàng trong 7 ngày</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 " >
                    <div class="d-flex align-items-center " id="st1border">
                        <h2 class="fa fa-phone-volume "></h2>
                        <h5 class="font-weight-semi-bold "> Hỗ trợ 24/7</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- phan cach -->
        <div class="container" id="phancach">
            <div id="pchr">
                <hr  style="width: 5rem;flex-grow: 1;background-color: var(--dark); height: 3px;">
            </div> 
            <b>Sản phẩm</b>
             <div id="pchr" >
                <hr style="width: 5rem;flex-grow: 1;background-color: var(--dark); height: 3px;">
             </div>
        </div>
        <!-- san pham -->
           <section class="container">
            <div class="row" id="st1">
                <div class="col-lg-3 col-md-6 " >

                    <div class="card" style="width: 16rem; ">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/img/crt.jpg" class="card-img-top " alt="..." id="anhsp">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center  ">Áo thun 3 cô gái cổ tròn</h5>
                          <p class="card-text d-flex justify-content-center">150.000đ</p>
                            <hr>
                          <a href="#" class="card-link "><i class="fa-solid fa-cart-shopping" id="iconsp"></i> Xem</a>
                          <a href="#" class="card-link "><i class="fa-solid fa-eye" id="iconsp"></i> Thêm vào giỏ</a>
                        </div>
                      </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 " >
                    <div class="card" style="width: 16rem; ">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/img/kaki1.jpg" class="card-img-top" alt="..." id="anhsp">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center ">Áo thun 3 cô gái cổ tròn</h5>
                          <p class="card-text d-flex justify-content-center">150.000đ</p>
                            <hr>
                          <a href="#" class="card-link "><i class="fa-solid fa-cart-shopping" id="iconsp"></i> Xem</a>
                          <a href="#" class="card-link "><i class="fa-solid fa-eye" id="iconsp"></i> Thêm vào giỏ</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 " >
                    <div class="card" style="width: 16rem; ">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/img/here.jpg" class="card-img-top" alt="..." id="anhsp">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center ">Áo thun 3 cô gái cổ tròn</h5>
                          <p class="card-text d-flex justify-content-center">150.000đ</p>
                            <hr>
                          <a href="#" class="card-link "><i class="fa-solid fa-cart-shopping" id="iconsp"></i> Xem</a>
                          <a href="#" class="card-link "><i class="fa-solid fa-eye" id="iconsp"></i> Thêm vào giỏ</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 " >
                    <div class="card" style="width: 16rem; ">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/img/lai956.jpg" class="card-img-top" alt="..." id="anhsp">
                        <div class="card-body">
                          <h5 class="card-title d-flex justify-content-center ">Áo thun 3 cô gái cổ tròn</h5>
                          <p class="card-text d-flex justify-content-center">150.000đ</p>
                            <hr>
                          <a href="#" class="card-link "><i class="fa-solid fa-cart-shopping" id="iconsp"></i> Xem</a>
                          <a href="#" class="card-link "><i class="fa-solid fa-eye" id="iconsp"></i> Thêm vào giỏ</a>
                        </div>
                      </div>
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
    <footer>
                <div class="container-fluid text-dark mt-5 pt-5" id="ft">
                    <div class="row ">
                        <div class="col-lg-4" id="ftcol">
                            <div>
                                <a href="#" class="textlg"> 
                                    <b style="display: inline;">FANCY</b><b style="display: inline; color: var(--dark);">&nbsp; Shop</b>
                                </a>
                            </div>
                            <p>Giấy chứng nhận đăng ký doanh nghiệp số: 031530999, đăng ký lần đầu ngày 18/06/2018.</p>
                            <p class="mb-2"><i class="fa fa-map-marker-alt mr-3"></i> 123 Trần Quang Khải, Ninh Kiều,
                                CT.</p>
                            <p class="mb-2"><i class="fa fa-envelope  mr-3"></i> Huynhai@gmail.com</p>
                            <p class="mb-0"><i class="fa fa-phone-alt mr-3"></i> 090807601</p>
                        </div>
                        <div class="col-lg-8 ">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-weight-bold text-dark mb-3">Đi Đến Trang</h5>
                                    <div class="d-flex flex-column justify-content-start" id="fta">
                                        <a class=" mb-2" href="#" id="fta1"><i class="fa fa-angle-right mr-2"></i> Trang
                                            Chủ</a>
                                        <a class="mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Đăng
                                            Nhập</a>
                                        <a class=" mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Đăng
                                            Ký</a>
                                        <a class=" mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Liên Hệ
                                            Shop</a>
                                        <a class=" mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Giỏ
                                            Hàng</a>
                                        <a class="mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Trang Cá
                                            Nhân</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="font-weight-bold text-dark mb-3">Chi Nhánh</h5>
                                    <div class="d-flex flex-column justify-content-start" id="fta">
                                        <a class=" mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Cần
                                            Thơ</a>
                                        <a class=" mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Sài Gòn</a>
                                        <a class=" mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Đà
                                            Nẵng</a>
                                        <a class=" mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Hải
                                            Phòng</a>
                                        <a class=" mb-2" href="#"><i
                                                class="fa fa-angle-right mr-2"></i> Vinh</a>
                                        <a class="mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Hà Nội</a>
                                    </div>
                                </div>
                                <div class="col-md-4 " id="ftbantin">
                                    <h5 class="font-weight-bold text-dark mb-4">Đăng Ký Nhận Tin</h5>
                                    <form action="#" id="ftdk">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-0 py-2 mt-2" placeholder="Họ Tên"
                                                required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control border-0 py-2 mt-4" placeholder="Email"
                                                required="required" />
                                        </div>
                                        <div>
                                            <button class="btn  btn-block border-0 mt-4" type="submit">Đăng ký</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-light mt-2 ">
                        <div class="col-md-6 px-xl-0">
                            <p class="mb-md-2 text-center text-md-left text-dark m-2">
                                &copy; <a class="text-dark font-weight-semi-bold" href="#">FANCY SHOP </a>. Thiết Kế Bởi
                                <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com"> H A</a><br>
                                <a href="https://themewagon.com" target="_blank"></a>
                            </p>
                        </div>
                        <div class="col-md-6  text-center  mt-2">
                            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/img/payments.png" alt="">
                        </div>
                    </div>
                </div>
                
        
         <!-- Footer End -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>