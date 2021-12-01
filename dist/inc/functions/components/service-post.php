
  <?php $terms_id = get_queried_object_id();?>
 <?php $paged =get_query_var('paged')?get_query_var('paged'):1;?>

        <?php 
            $query = new WP_Query( 
                array (
                    'post_type' => 'service',
                    'order' => 'DESC',
                    'posts_per_page' => 8,
                    'meta_key' => '_thumbnail_id', // only pull sliders with images
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'serviceshow',
                            'field' => 'id',
                            'terms' => 'terms_id',
                             'date_query' => array(
                                'affter' => '-30 days',
                                'column' => 'post_date'
                            ),
                          'paged' => $paged

                        )
                    ),
                )
            );     
            
          ?>


<!-- page head -->
        <div class="page-head">
            <div class="container">الخدمات</div>
        </div>
        <!-- // page head -->

        <!-- Services -->
        <div class="services-v2">
            <div class="container">
                <div class="row overflow">
                    <!-- Services Block v2 -->
                      <?php if (  $query  ->have_posts()): ?> 
                        <?php // While we have posts, output them as <li>'s
                      while (  $query ->have_posts() ) : $query ->the_post(); ?> 
                      <div class="col-12 col-m-4 col-l-3 services-block-v2 wow fadeInStart">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <i><img src="<?php echo $image[0];?>"   alt=""></i>
                        <?php endif; ?>

                        <a href="<?php the_permalink()?>"><h3><?php the_title(); ?></h3></a>
                        <p><?php echo strip_tags(get_the_excerpt()); ?></p>
                        <a href="<?php the_permalink()?>" class="btn primary round-corner">طلب الخدمة</a>
                    </div>
                    <!-- // Services Block v2 -->
                     <?php endwhile; wp_reset_postdata(); ?>
                    <?php else : ?>
                    <!-- ENTER HTML IF THERE'S NO SLIDES HERE -->
                    <?php endif; ?> 
                </div>
            </div>
        </div>
        <!-- // Services -->

 