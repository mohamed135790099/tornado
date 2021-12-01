
  <?php $terms_id = get_queried_object_id();?>
        <?php 
            $query = new WP_Query( 
                array (
                    'post_type' => 'advantage',
                    'meta_key' => '_thumbnail_id', // only pull sliders with images
                    'posts_per_page' => 9,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'advantageshow',
                            'field' => 'id',
                            'terms' => 'terms_id',

                        )
                    ),
                )
            );     
          ?>

        <div class="services features-section overflow">
            <div class="container">
                <h2 class="sec-head-v3 dark">مميزاتنا</h2>
                <?php echo get_option('profilio_advantage');?>
                
                <div class="row">
                    <!-- services block -->
                    <?php if (  $query  ->have_posts()): ?> 
                      <?php // While we have posts, output them as <li>'s
                       while (  $query ->have_posts() ) : $query ->the_post(); ?> 
                    <div class="col-12 service-block col-m-6 col-l-4 wow fadeInStart">
                        <div class="table-style">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <i><img src="<?php echo $image[0];?>" alt=""></i>
                               <?php endif; ?>
                            <div class="info">
                            <h5><?php the_title(); ?></h5>
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
        <!-- // Features -->
        