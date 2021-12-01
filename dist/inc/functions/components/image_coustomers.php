  
    <?php $terms_id = get_queried_object_id();?>
    <?php $ij=0;?>
     <?php 
        $query = new WP_Query( 
            array (
                'post_type' => 'customer',
                 'order'=> 'DESC',
                  'post_per_pages'=>-1,
                  'meta_key' => '_thumbnail_id', // only pull sliders with images
                  'tax_query' => array(
                    array(
                        'taxonomy' => 'customershow',
                        'field' => 'id',
                        'terms' => 'terms_id',
                    )
                ),
            )
        );
       // if we have posts, display them:
    // if we have posts, display them:
     ?>
          <!-- Our Clintes -->
        <div class="our-clintes">
            <div class="container">
                <h2 class="sec-head-v2">عملائنا</h2>
                <!-- Clintes Slider -->
                <div class="clintes-slider row">
                   <?php while($query->have_posts()): $query->the_post();?>
                    <div class="item">  
                        <a href="#"><img src="<?php if(has_post_thumbnail($post->ID)){the_post_thumbnail_url($post->ID );}?>" alt=""></a>
                    </div>  
                   <?php $ij++;  endwhile;?>
                </div>
                <!-- // Clintes Slider -->
            </div>
        </div>
        <!-- // Our Clintes -->
