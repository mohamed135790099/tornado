
 
    <?php $terms_id = get_queried_object_id();?>
    <?php $ij=0;?>
     <?php 
        $query = new WP_Query( 
            array (
                'post_type' => 'team',
                'order'=> 'DESC',
                'post_per_pages'=>-1,
                'meta_key' => '_thumbnail_id', // only pull sliders with images
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Teamshow',
                        'field' => 'id',
                        'terms' => 'terms_id',

                    )
                ),
            )
        );
        ?>           
          <!-- Our Team -->
        <div class="our-team">
            <div class="container">
                <h2 class="sec-head-v2">فريق العمل </h2>      
                <!-- Team Slider -->
                <div class="team-slider row">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="item">  
                        <div class="content-box">
                           <?php if (has_post_thumbnail( $post->ID ) ): ?>
                           <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <a href="#"><img src="<?php echo $image[0]; ?>" alt=""></a>
                            <?php endif; ?>
                            <h3><?php the_title();?></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>      
                <!-- // Team Slider -->
               <?php endwhile;$ij++; wp_reset_postdata(); ?>
            </div>
        </div>
        <!-- // Our Team -->
        