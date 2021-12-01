<?php
    /**
     * Template Name: Default Rich Content
     * this template for displaying Rich Content for any of this pages single.php or page.php
     * @package Tornado Wordpress
    */
?>
<?php  get_header();?>
        <!-- loading -->
        <div class='tornado-loader loading8'>
            <div class='loader24'>
                <div class='square'></div>
                <div class='square'></div>
                <div class='square last'></div>
                <div class='square clea'></div>
                <div class='square'></div>
                <div class='square last'></div>
                <div class='square clea'></div>
                <div class='square '></div>
                <div class='square last'></div>
            </div>
        </div>
        
        <!-- // top navigation -->
        <!-- Header -->
      <?php get_template_part('.\inc\functions\components\header')?> 

        <!-- // Header -->
        
        <!-- Search Box -->
      <?php  get_search_form();?>
        <!-- page head -->
        <div class="page-head">
            <div class="container">التدوينه</div>
        </div>
        <!-- // page head -->
           <?php if( have_posts()):?>
           <?php while( have_posts()): the_post();?>
        <!-- Page Content -->
        <div class="container page-content">
           <div class="info">
            <span class="ti-calendar"><?php echo __('Posted on'); the_date('d M Y'); ?></span>
            <span class="ti-comment-alt-dots"><?php comments_number( __('no comments'), __('one comment'), '% ' . __('comments') ); ?></span>
          </div>
            <!-- News Post -->
            <div class="news-post">
                <div class="post-head">
                    <h1><?php the_title();?></h1>
                    <div class="info">
                        <span class="ti-person"><?php the_author();?></span>
                        <span class="ti-chatbubble"> <?php echo get_post_meta($post->ID,'chatbubble',true);?></span>
                        <span class="ti-eye"><?php echo get_post_meta($post->ID,'eye',true);?></span>
                    </div>
                </div>
               <?php  get_post_meta('sub_title') ?>
                <?php $image = wp_get_attachment_image_src(get_post_meta( $post->ID, 'second_featured_image', true),'thumbnail'); ?>
                <img src="<?php echo $image[0];?>" alt="" class="fluid">  
                <p>
                   <?php the_content();?>
                </p>
                
                <?php get_template_part('.\inc\functions\blogs\blog','schema'); ?>

                <div class="footer">
                      <div class="share">
                        <span>مشاركة الموضوع</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="ti-facebook"></a>
                        <a href="https://api.whatsapp.com/send?text=<?php the_permalink();?>" data-action="share/whatsapp/share" class="icon-btn tooltip ti-whatsapp" target="_blank" ></a>
                        <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" class="ti-twitter"></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=false&url=<?php the_permalink();?>" class="icon-btn tooltip ti-linkedin"></a>
    
                    </div>
                </div>
            </div>
            <!-- // News Post -->
               <?php endwhile;?>
                <?php else:?>
                <?php echo wpautop('Sorry,No Posts were found');?>    
              <?php endif;?> 
        
       
            <!-- Comment -->
           <?php comments_template();?>
        <!-- // Page Content -->
     </div>
        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
                    <?php echo get_option('banner_code');?>
                </div>
        </div>
        <!-- // Banner -->
        
        <!-- Footer -->
<?php  get_footer();?>


