
<?php 
$paged =get_query_var('paged')?get_query_var('paged'):1;
$args = array(
        'post_type' => 'advantage',
        'order' => 'DESC',
        'posts_per_page' => 3,
        'date_query' => array(
                'affter' => '-30 days',
                'column' => 'post_date'
        ),
        'taxonomy' => 'serviceshow',
        'paged' => $paged

);
$loop = new WP_Query($args);
?>

        <!-- About US -->
        <div class="about-us">
            <div class="container">
                <div class="row overflow">
                    <div class="col-12 col-m-5 col-l-4 wow fadeInStart">
                        <div class="content-box">
                            <img src="<?php echo get_option('image_body');?>" alt="">
                            <!-- should create page for about us-->
                            <a href="http://localhost:8090/wordpress/about/" class="button">اعرف المزيد</a>
                        </div>
                    </div>
                    
                    <div class="col-12 col-m-7 col-l-8">
                        <h3 class="wow fadeInUp" data-delay=".3s">من نحن</h3>
                        <p class="wow fadeInUp" data-delay=".6s"><?php echo get_option('body_code');?></p>
                        <p class="wow fadeInUp" data-delay=".9s"><?php echo get_option('body_code2')?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // About US -->
      

        <!-- Services -->
        <div class="services overflow">
            <div class="container">
                <div class="row">
                    <!-- services block -->
                       <?php if ( $loop->have_posts()): ?> 
                        <?php // While we have posts, output them as <li>'s
                      while (  $loop ->have_posts() ) : $loop ->the_post(); ?> 
                    <div class="col-12 service-block col-m-6 col-l-4 wow fadeInStart">
                        <div class="table-style">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <i><img src="<?php echo $image[0];?>" alt=""></i>
                             <?php endif; ?>

                            <div class="info">
                                <h5><?php the_title();?></h5>
                                <p><?php echo strip_tags(get_the_excerpt()); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- // services block -->
                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php else : ?>
                    <!-- ENTER HTML IF THERE'S NO SLIDES HERE -->
                    <?php endif; ?> 
                
                </div>
            </div>
        </div>
        <!-- // Services -->
  