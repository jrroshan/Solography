<?php
/* Template Name: About */

?>


<?php get_header(); ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="about-pic set-bg" data-setbg="img/about/about-pic.jpg">
                        <a href="https://www.youtube.com/watch?v=hxADTEJalRw&list=WL&index=49&t=0s" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about-text">
                        <div class="section-title">
                        <?php while(have_posts()):the_post();
                        ?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <?php endwhile; ?>
                        <div class="at-list">
                        <?php 
                                
                                $args = array(
                                    'post_type' => 'about',
                                    'posts_per_page' => 4,
                                );
                
                                $abouts = new WP_Query($args);
                
                                while ($abouts->have_posts()){
                                $abouts->the_post();
                            ?>
                            <div class="al-item">
                                <div class="al-pic">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                                </div>
                                <div class="al-text">
                                    <h5><?php the_title(); ?></h5>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>

                            <?php }
                                    wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Cta Section Begin -->
    <section class="cta-section spad set-bg" data-setbg="img/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h2>Wanna promote your brand?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore<br /> magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas.</p>
                        <a href="#" class="primary-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->


<?php get_footer(); ?>