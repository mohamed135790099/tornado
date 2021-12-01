  
  <?php 
  /**
   * can write menu by two away go the functions.php
   * and register and go the place mnu and add 
   */
  
  ?>

           <!-- top navigation -->
        <div class="top-navigation">
            <div class="container">
                <span class="ti-mail"><?php echo get_option('contact_email');?></span>
                <span class="ti-phone"><?php echo get_option('phone_number'); ?></span>
                <div class="social">
                    <a href="<?php echo get_option('facebook_url'); ?>" class="ti-facebook"></a>
                    <a href="<?php echo get_option('twitter_url'); ?>" class="ti-twitter"></a>
                    <a href="<?php  echo get_option('google_plus_url');?>" class="ti-googleplus"></a>
                    <a href="<?php echo get_option('youtube_url');?>" class="ti-youtube-play"></a>
                    <a href="<?php echo get_option('instagram_url');?>" class="ti-instagram"></a>
                </div>
            </div>
        </div>
        <!-- // top navigation -->
  <!-- Header -->
        <header class="tornado-header">
            <div class="container">
                <!-- Logo -->
             <a href="<?php echo site_url();?>" class="logo"> <img src="<?php echo get_option('theme_logo');?>" alt="<?php echo bloginfo('name');?>"> </a>
                <!-- Main Menu -->
                <div class="navigation-menu" data-id="main-menu">
                        <?php 
                            if(has_nav_menu('primary-menu')){
                                wp_nav_menu(array(
                                  'theme_location' => 'primary-menu',
                                  'container'=>false,
                                   'catainer_class' => false,
                                    'catainer_class' => false,
                                ));
                                }
                         
                         ?>
               
                </div>
                <div class="action-btns">
                    <a href="#" data-modal="search-box" class="icon-btn ti-search"></a>
                    <a href="#" class="icon-btn menu-btn ti-menu-round" data-id="main-menu"></a>
                </div>
            </div>
        </header>
        <!-- // Header-->
