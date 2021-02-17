<?php get_header(); ?>

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <?php 
                    
                $args = array(
                    'post_type' => 'slider'
                );

                $sliders = new WP_Query($args);

                while ($sliders->have_posts()){
                $sliders->the_post();
        ?>
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <a href="#" class="primary-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php }
                 wp_reset_query(); ?>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">

            <?php 
                    
                $args = array(
                    'post_type' => 'banner',
                    'posts_per_page' => 3,
                );

                $banners = new WP_Query($args);

                while ($banners->have_posts()){
                $banners->the_post();
            ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
                <?php }
                 wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our latest works</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="portfolio-filter">
                        <?php 
                            $args = array(
                                'post_type'=>'gallery',
                                'post_per_page'=>11
                            );

                            $gallery = new WP_Query($args);

                            while ($gallery->have_posts()){
                                $gallery->the_post();
                            ?>
                        <div class="pf-item set-bg fashion" data-setbg="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                            <a href="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4><?php the_title(); ?></h4>
                                <!-- <span><?php //the_excerpt(); ?></span> -->
                            </div>
                        </div>

                        <?php }
                 wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more-btn">
            <a href="#">Load More</a>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <?php get_footer(); ?>