<?php
    /**
     * Template Name: succes Page
     * this template reprsent the sucess Page
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
        
     
        <!-- Header -->
      <?php get_template_part('.\inc\functions\components\header')?> 
        <!-- // Header -->
        
        <!-- Search Box -->
        <?php  get_search_form();?>
        <!-- page head -->
        <div class="page-head">
            <div class="container">الخدمات</div>
        </div>
        <!-- // page head -->

        <div class="success-page">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-colored.png" alt="error-404">
            <h2>لقد تم ارسال طلبك بنجاح</h2>
            <a href="http://localhost:8090/wordpress/?page_id=134" class="btn primary round-corner">العودة للرئيسية</a>
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