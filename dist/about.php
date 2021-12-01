<?php
    /**
     * Template Name: about Page
     * this template reprsent the aboutPage
     * @package Tornado Wordpress
    */
?>

    <?php get_header();?>
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
        
        <?php get_template_part('.\inc\functions\components\header')?> 

        <!-- Search Box -->
        <?php get_search_form();?>

        <!-- About US -->
        <div class="about-us">
            <div class="container">
                <div class="row overflow">
                    <div class="col-12 col-m-5 col-l-4 wow fadeInEnd">
                        <div class="content-box">
                            <img src="<?php echo get_post_meta($post->ID, 'imag-about-us', true) ?>" alt="">
                        </div>
                    </div>
                    
                    <div class="col-12 col-m-7 col-l-8">
                        <h3 class="wow fadeInUp" data-delay=".3s">من نحن</h3>
                        <p class="wow fadeInUp" data-delay=".6s"><?php echo get_post_meta($post->ID,'paragraph-about',true);?></p>
                        <p class="wow fadeInUp" data-delay=".9s"><?php echo get_post_meta($post->ID,'Increase-number-paragraphs-about',true);?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // About US -->
        
        <!-- Our Vision -->
        <div class="our-vision">
            <div class="container">
                <div class="row row-reverse overflow">
                    <div class="col-12 col-m-5 col-l-4 wow fadeInEnd">
                        <div class="content-box">
                            <img src="<?php echo get_post_meta($post->ID, 'imag-our-vision', true) ?>" alt="">
                        </div>
                    </div>
                    
                    <div class="col-12 col-m-7 col-l-8">
                        <h3 class="wow fadeInUp" data-delay=".3s">رؤيتنا</h3>
                        <p class="wow fadeInUp" data-delay=".6s"><?php echo get_post_meta($post->ID,'paragraph-our-vision',true);?></p>
                        <p class="wow fadeInUp" data-delay=".9s"><?php echo get_post_meta($post->ID,'Increase-number-paragraphs-our-vision',true);?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Our Vision -->
        
        <!-- Our Mission -->
        <div class="our-mission">
            <div class="container">
                <div class="row overflow">
                    <div class="col-12 col-m-5 col-l-4 wow fadeInEnd">
                        <div class="content-box">
                            <img src="<?php echo get_post_meta($post->ID, 'Our-Mission-image', true) ?>" alt="">
                        </div>
                    </div>
                    
                    <div class="col-12 col-m-7 col-l-8">
                        <h3 class="wow fadeInUp" data-delay=".3s">رسالتنا</h3>
                        <p class="wow fadeInUp" data-delay=".6s"><?php echo get_post_meta($post->ID,'paragraph-our-Mission',true);?></p>
                        <p class="wow fadeInUp" data-delay=".9s"><?php echo get_post_meta($post->ID,'Increase-number-paragraphs-our-Mission',true);?></p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- // Our Mission -->
         <?php get_template_part('.\inc\functions\components\our-team')?> 
        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
                <?php echo get_option('banner_code');?>
             </div>
        </div>
        <!-- // Banner -->
        
    <?php get_footer();?>