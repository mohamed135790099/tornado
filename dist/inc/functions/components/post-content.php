 <?php $terms_id = get_queried_object_id();?>
 <?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 12,
            'paged' => $paged,
            'order' => 'DESC',
            'field' => 'id',
            'terms' => 'terms_id',
                       
        );
        $the_query = new WP_Query( $args );?>
       <div class="container">
           <h2 class="sec-head wow fadeInUp">اعمالنا السابقه </h2>
           <p class="wow fadeInUp"><?php echo get_option('body_code_start');?> </p>
                <div class="row overflow">
                    <!-- work block -->
                    <?php if( $the_query->have_posts()):?>
                    <?php while(  $the_query->have_posts()): $the_query->the_post();?>
                    <div class="work-block col-12 col-m-6 col-l-4 wow fadeInStart">
                     <?php if (has_post_thumbnail( $post->ID ) ): ?>
                      <div data-src="<?php if(has_post_thumbnail()){the_post_thumbnail_url($post->ID );}?> ">
                            <?php endif;?>   
                            <div class="info">
                                <a href="<?php the_permalink();?>"><h3><?php echo the_title()?></h3></a>
                                <p> <?php echo get_the_excerpt();?></p>
                            </div>
                            <a href="<?php the_permalink();?>" class="ti-arrow-left-c more"></a>
                        </div>
                    </div>
                    <?php endwhile;?>
                        <?php else:?>
                        <?php echo wpautop('Sorry,No Posts were found');?>    
                        <?php endif;?>     
                    <!-- // work block -->
             </div>
    </div>   
 </div>

         
      
