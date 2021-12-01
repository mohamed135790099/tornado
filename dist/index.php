<?php
    /**
     * Template Name: Home Page
     * this template reprsent the Home Page
     * @package Tornado Wordpress
    */

?>

 

<?php get_header(); ?>
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

        <?php  get_search_form();?>

        <div class="hero-slider">
        <?php get_template_part('.\inc\functions\components\slider')?>
        </div>
       
        <!-- About US -->
       
        <!-- // Services -->
          <?php get_template_part('.\inc\functions\components\about-us')?>
        <!-- Lateast Works -->
        <div class="Lateast-works">
            <?php get_template_part('.\inc\functions\components\post-content')?>
        </div>
        <!-- // Lateast Works -->
        
        
        <!-- Our Clintes -->
             <?php get_template_part('.\inc\functions\components\image_customers');?>
             <?php require_once('C:\xampp\htdocs\wordpress\wp-content\themes\wp_heiash_v1\dist\inc\functions\components\image_coustomers.php')?>
        <!-- // Our Clintes -->
        
        <!-- Clintes Opinions -->
                <?php get_template_part('.\inc\functions\components\clintes-opinions')?>
        <!-- // Clintes Opinions -->
        <!-- Lateast News -->
         <!-- Lateast News -->
        <div class="lateast-news">
            <?php get_template_part('.\inc\functions\components\recent-post')?>
        </div>
        <!-- // Lateast News -->
        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
                <?php echo get_option('banner_code');?>
            </div>
        </div>
        <!-- // Banner -->   
 <?php get_footer();?>