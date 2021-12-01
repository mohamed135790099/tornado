

<?php $terms_id = get_queried_object_id();?>
<?php
$query = new WP_Query(
    array(
        'post_type' => 'opinion',
        'meta_key' => '_thumbnail_id', // only pull sliders with images
        'tax_query' => array(
            array(
                'taxonomy' => 'opinionshow',
                'field' => 'id',
                'terms' => 'terms_id',
                'order' => 'menu-order',

            ),
        ),
    )
);
// if we have posts, display them:
// if we have posts, display them:
?>

   <!-- Clintes Opinions -->
        <div class="clintes-opinions">
            <div class="container">
                <h2 class="sec-head-v2 dark">اراء عملائنا</h2>

                <!-- Opinions slider -->
               <div class="clintes-op row tornado-ui">
                    <!-- item -->
               <?php if ($query->have_posts()): ?>
                <?php // While we have posts, output them as <li>'s
                while ($query->have_posts()): $query->the_post();?>
	                    <div class="item">
	                        <div class="content-box">
	                            <div class="head">
	                               <?php if (has_post_thumbnail($post->ID)): ?>
	                               <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>
	                                <img src="<?php echo $image[0]; ?>" alt="">
	                                 <?php endif;?>
                                     <span> <?php the_title();?>
                                    <i><?php the_date('d/m/Y g:i A');?></i>
                                </span>
                            </div>
                            <p> <?php echo strip_tags(get_the_content()); ?> </p>
                        </div>
                    </div>
                    <!-- // item -->
                  <?php endwhile;
                  wp_reset_postdata();?>
                   <?php else: ?>
                   <!-- ENTER HTML IF THERE'S NO SLIDES HERE -->
                  <?php endif;?>

                </div>
                <!-- // Opinions slider -->
            </div>
        </div>

