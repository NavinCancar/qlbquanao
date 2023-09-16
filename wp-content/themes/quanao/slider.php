                    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php 
                            $args = array(
                                'posts_per_page' => 2,
                                'post_type'      => 'slider'
                            );
                            $the_query = new WP_Query( $args );
                            $i=1;
                            ?>
                            <?php if( $the_query->have_posts() ): ?>
                            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="carousel-item <?php if($i==1){ echo 'active'; $i++; }?>" style="height: 410px;">
                                <!--<img class="img-fluid" src="<php bloginfo('stylesheet_directory') ?>/img/carousel-1.jpg" alt="Image">-->
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'img-fluid') ); ?>
                                <div
                                    class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">SALE 10% CHO ĐƠN
                                            HÀNG ĐẦU TIÊN</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">BỘ SƯU TẬP THU -
                                            ĐÔNG</h3>
                                        <a href="" class="btn btn-light py-2 px-3">XEM NGAY</a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>

                            <!--<div class="carousel-item active" style="height: 410px;">
                                <img class="img-fluid" src="<php bloginfo('stylesheet_directory') ?>/img/carousel-1.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                                        <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px;">
                                <img class="img-fluid" src="<php bloginfo('stylesheet_directory') ?>/img/carousel-2.jpg" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                        <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-prev-icon mb-n2"></span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-next-icon mb-n2"></span>
                            </div>
                        </a>
                    </div>