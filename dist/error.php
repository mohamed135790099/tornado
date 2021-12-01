<?php
    /**
     * Template Name: error Page
     * this template reprsent the error Page
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
        <!-- top navigation -->
        <?php get_template_part('.\inc\functions\components\header')?> 
        <!-- Search Box -->        
        <!-- page head -->
        <div class="page-head">
            <div class="container">الخدمات</div>
        </div>
        <!-- // page head -->

        <div class="error404page">
            <img src="<?php echo get_template_directory_uri(); ?>../../img/404.png"  alt="error-404">
            <h2>الصفحة المطلوبة غير موجودة</h2>
            <a href="http://localhost:8090/wordpress/%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3%d9%8a%d9%87/" class="btn primary round-corner">العودة للرئيسية</a>
        </div>
        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
                       <?php echo get_option('banner_code');?>
                  </div>
        </div>
        <!-- // Banner -->
        
    <?php get_footer();?>