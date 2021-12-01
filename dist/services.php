<?php
    /**
     * Template Name: Service Page
     * this template reprsent the Service Page
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
        <!-- services -->
         <?php get_template_part('.\inc\functions\components\service-post')?> 
        <!-- Features -->
        <?php get_template_part('.\inc\functions\components\advantage-post')?> 

        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
                     <?php echo get_option('banner_code');?>
                 </div>
        </div>
        <!-- // Banner -->
        
     <?php get_footer();?>