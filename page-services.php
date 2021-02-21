<?php
/**
 * Template Name: Services page template
 *.
 *
 */

?>


<?php get_header(); ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <section class="services-section services-normal spad">
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

    <!-- Services Option Section Begin -->
    <section class="services-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <?php 
                    
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => 6,
                    );
    
                    $services = new WP_Query($args);
                    $count = 0;
                    while ($services->have_posts()){
                    $services->the_post();
                    $count++;
                    if($count<=3 && $count>=1){
                ?>
                    <div class="so-item">
                        <div class="so-title">
                            <div class="so-number"><?php echo $count; ?></div>
                            <h5><?php the_title(); ?></h5>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                    </div>

                    <?php }; }

                              wp_reset_query();    ?>
                    
                </div>
                <div class="col-lg-6">
                <?php 
                    
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => 6,
                    );
    
                    $services = new WP_Query($args);
                    $count = 0;
                    while ($services->have_posts()){
                    $services->the_post();
                    $count++;
                ?>
                <?php if($count<=6 && $count>=4){ ?>
                    <div class="so-item">
                        <div class="so-title">
                            <div class="so-number"><?php echo $count; ?></div>
                            <h5><?php the_title(); ?></h5>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php }; }
                                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Option Section End -->

<?php get_footer(); ?>