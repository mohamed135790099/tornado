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
$loop = new WP_Query($args);
?>
            <div class="container">
                <h2 class="sec-head">اخر الاخبار</h2>
                <p><?php echo get_option('latest_code');?></p>
                <div class="row overflow">
                    <!-- news block -->
                     <?php if($loop->have_posts()): ?>
                    <?php while($loop->have_posts()): $loop->the_post();?>
                    <div class="col-12 col-m-4 col-l-3 news-block wow fadeInStart">
                        <div class="content-box">
                            <a href="#" class="image" data-src="<?php if(has_post_thumbnail($post->ID)){the_post_thumbnail_url($post->ID );}?>"></a>
                            <a href="<?php the_permalink(); ?>"><h3><?php echo the_title();?></h3></a>
                            <p><?php echo get_the_excerpt();?></p>
                            <span class="ti-clock"><?php echo get_the_date();?></span>
                            <a href="<?php the_permalink();?>" class="more">قراءة المزيد</a>
                        </div>
                    </div>
                    <?php endwhile;?>
                     <?php else:?>
                     <?php echo wpautop('Sorry,No Posts were found');?>    
                     <?php endif;?> 
                </div>
            </div>

                    
               
