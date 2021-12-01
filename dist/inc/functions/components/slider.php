
<?php $terms_id = get_queried_object_id();?>
    <?php $ij=0;
        $slider = array('post_type'=>'slider', 'order' => 'DESC','post_per_pages'=>3, 'meta_key' => '_thumbnail_id', 'tax_query' => array(
                    array(
                        'taxonomy' => 'slideshow',
                        'field' => 'id',
                        'terms' => 'terms_id',
                    )
                ),);
        $slider_query = new wp_query($slider);
        while($slider_query->have_posts()): $slider_query->the_post();
    ?>
        <!-- item -->
            <div class="item parallax-bg" data-src="<?php if(has_post_thumbnail($post->ID)){the_post_thumbnail_url($post->ID );}?>">
                <a href="#" class="overlink"></a>
                <div class="container">
                    <div class="row no-gutter align-center-y align-center-x">
                        <div class="col-12 col-m-6">
                                  <h1><?php the_title(); ?></h1>
                                  <p><?php the_content(); ?></p>
                                 <a href="<?php the_permalink()?>" class="btn primary round-corner">قراءة المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // item -->
    <?php $ij++;  endwhile;?>




            