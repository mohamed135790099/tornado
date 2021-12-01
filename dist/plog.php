<?php
    /**
     * Template Name: Blog Page
     * this template reprsent the Blog Page
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
        <!-- header -->
        <?php get_template_part('.\inc\functions\components\header')?> 
        <!-- // Header -->
        <!-- Search Box -->
      <?php get_search_form();?>
        <!-- page head -->
        <div class="page-head">
            <div class="container">معرض الاعمال</div>
        </div>
        <!-- // page head -->
        <!-- Page Content -->
        <?php get_template_part('.\inc\functions\components\plog-post')?> 

            <!-- Pagination -->
          
        </div>
        <!-- // Page Content -->
        
        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
                 <?php echo get_option('banner_code');?>
              </div>
        </div>
        <!-- // Banner -->
        
     <?php get_footer();?>