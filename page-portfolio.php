<?php get_header(); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section portfolio-page spad">
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
                            </div>
                        </div>
                        <?php }
                 wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="load-more-btn portfolio-btn">
            <a href="#">Load More</a>
        </div>
    </section>
    <!-- Portfolio Section End -->

<?php get_footer(); ?> 