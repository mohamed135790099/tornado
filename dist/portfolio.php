<?php
    /**
     * Template Name: Bortfolio Page
     * this template reprsent the Bortfolio Page
     * @package Tornado Wordpress
    */
?>
<?php get_header();?>
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
        <!-- header-->
    <?php get_template_part('.\inc\functions\components\header')?> 
        <!-- // Header -->
    <?php get_search_form();?>        
        <!-- page head -->
        <!-- Page Content -->          
     <?php get_template_part('.\inc\functions\components\profilio-post.php')?> 
     <?php require_once('C:\xampp\htdocs\wordpress\wp-content\themes\wp_heiash_v1\dist\inc\functions\components\profilio-post.php') ?>
        
        <!-- Page Content -->
            <!-- Pagination -->     <!-- // Page Content -->
        
        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
                       <?php echo get_option('banner_code');?>
                   </div>
        </div>
        <!-- // Banner -->
    <?php get_footer()?>