<?php
    /**
     * Template Name: contact Page
     * this template reprsent the contact Page
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
        
          <!-- header-->
          <?php get_template_part('.\inc\functions\components\header')?> 
        <!-- // Header -->
         <?php  get_search_form();?>
        <!-- page head -->
        <div class="page-head">
            <div class="container">اتصل بنا</div>
        </div>
        <!-- // page head -->
        
        <!-- Responsive Map -->
        <div class="responsive-element map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3486.8840190422525!2d31.101914369463866!3d29.079572035085626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd075b49a4da1018a!2z2KfZhtis2KfYsiDZhNiu2K_Zhdin2Kog2KfZhNiq2LHYrNmF2Kk!5e0!3m2!1sar!2seg!4v1620534521358!5m2!1sar!2seg" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- // Responsive Map -->
        <!-- Contact US -->
        <div class="row no-gutter">
            <div class="col-12 col-l-5 contact-us-info">
                <h2 class="sec-head-v3 dark">تواصل معنا</h2>
                
                <div class="info-box">
                    <div class="table-style cinfo-block">
                        <i class="ti-phone"></i>
                        <div class="info">
                            <h3><?php echo get_option('phone_number');?></h3>
                            <h3><?php echo get_option('phone_number_2nd');?></h3>
                        </div>
                    </div>

                    <div class="table-style cinfo-block">
                        <i class="ti-email"></i>
                        <div class="info">
                            <h3><?php echo get_option('contact_email');?></h3>
                            <h3><?php echo get_option('contact_email_2nd');?></h3>
                        </div>
                    </div>

                    <div class="table-style cinfo-block">
                        <i class="ti-map-marker"></i>
                        <div class="info">
                            <p><?php echo get_option('branch_address');?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-l-7 contact-us-form">
                <h2 class="sec-head-v3">ارسل لنا رساله</h2>
                <?php echo do_shortcode('[contact-form-7 id="352" title="youtube"]'); ?>
                </div>
        </div>
        </div>
     
        <!-- // Contact US -->
        
        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
               <?php echo get_option('banner_code');?>
        </div>
        </div>
        <!-- // Banner -->
        
   <?php get_footer();?>