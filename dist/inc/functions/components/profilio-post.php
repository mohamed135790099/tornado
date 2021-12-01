  <!-- Lateast News -->  <?php 
$paged =get_query_var('paged')?get_query_var('paged'):1;
$args = array(
        'post_type' => 'post',
        'order' => 'DESC',
        'posts_per_page' => 4,
        'date_query' => array(
                'affter' => '-30 days',
                'column' => 'post_date'
        ),
        'paged' => $paged

);
$query = new WP_Query($args);
?>
        <!-- // page head -->
        <div class="page-head">
            <div class="container">معرض الاعمال</div>
        </div>
               <!-- Page Content -->
        <div class="container page-content">
            <div class="row overflow">
                <!-- work block -->
                 <?php if($query ->have_posts()):?>
                <?php while($query ->have_posts()):$query ->the_post();?>
                <div class="work-block-v2 col-12 col-m-6 col-l-4 wow fadeInStart">
                      <div data-src="<?php if(has_post_thumbnail()){the_post_thumbnail_url( );}?>">
                        <div class="info">
                            <a href="<?php the_permalink()?>"><h3><?php the_title(); ?></h3></a>
                            <p><?php echo get_the_excerpt();?></p>
                        </div>
                        <a href="<?php the_permalink()?> " class="ti-heart-border more"></a>
                    </div>
                </div>
                  <?php endwhile; wp_reset_postdata(); ?>
                <?php else : ?>
                <!-- ENTER HTML IF THERE'S NO SLIDES HERE -->
                <?php endif; ?>
                <!-- // work block -->
            </div> 
                   <?php global $query;
                    if (function_exists("pagination")) { pagination($query); };
                    wp_reset_postdata();?>
  
        </div>
       
