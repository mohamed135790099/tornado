<?php
    /**
     * Tornado Theme - Options Tab
     * @package Tornado Wordpress
    */
    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
?>

<!-- Page Head -->
<div class="page-head">
    <h1><?php echo __('Contact Info','tornado'); ?></h1>
</div>

<!-- Panel Block -->
<div class="options-panel">
    <!-- Panel Title -->
    <h2 class="panel-title"><?php echo __('Contact Information','tornado'); ?></h2>
    <div class="row no-gutter">
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="phone_number"><?php echo __('Phone Number','tornado'); ?></label>
                <input type="text" name="phone_number" placeholder="<?php echo __('01205175489','tornado'); ?>" value="<?php echo get_option('phone_number'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="phone_number_2nd"><?php echo __('Phone Number 2nd','tornado'); ?></label>
                <input type="text" name="phone_number_2nd" placeholder="<?php echo __('xx-xxxx-xxx','tornado'); ?>" value="<?php echo get_option('phone_number_2nd'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="contact_email"><?php echo __('Email Address','tornado'); ?></label>
                <input type="text" name="contact_email" placeholder="<?php echo __('example@mail.com','tornado'); ?>" value="<?php echo get_option('contact_email'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="contact_email_2nd"><?php echo __('Email Address 2nd','tornado'); ?></label>
                <input type="text" name="contact_email_2nd" placeholder="<?php echo __('example@mail.com','tornado'); ?>" value="<?php echo get_option('contact_email_2nd'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="whatsapp_number"><?php echo __('Whatsapp Number','tornado'); ?></label>
                <input type="text" name="whatsapp_number" placeholder="<?php echo __('xx-xxxx-xxx','tornado'); ?>" value="<?php echo get_option('whatsapp_number'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="whatsapp_number_2nd"><?php echo __('Whatsapp Number 2nd','tornado'); ?></label>
                <input type="text" name="whatsapp_number_2nd" placeholder="<?php echo __('xx-xxxx-xxx','tornado'); ?>" value="<?php echo get_option('whatsapp_number_2nd'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="branch_address"><?php echo __('Branch Location','tornado'); ?></label>
                <input type="text" name="branch_address" placeholder="<?php echo __('egypt, beni-suef, al-wasta','tornado'); ?>" value="<?php echo get_option('branch_address'); ?>">
            </div>
        </div>
        <!-- // Control Item -->
    </div>
</div>
<!-- // Panel Block -->

<!-- Panel Block -->
<div class="options-panel">
    <!-- Panel Title -->
    <h2 class="panel-title"><?php echo __('Social Media','tornado'); ?></h2>
    <div class="row no-gutter">
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="facebook_url"><?php echo __('Facebook url','tornado'); ?></label>
                <input type="text" name="facebook_url" placeholder="<?php echo __('https://fb.com/username','tornado'); ?>" value="<?php echo get_option('facebook_url'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="twitter_url"><?php echo __('Twitter url','tornado'); ?></label>
                <input type="text" name="twitter_url" placeholder="<?php echo __('https://twitter.com/@username','tornado'); ?>" value="<?php echo get_option('twitter_url'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="instagram_url"><?php echo __('Instagram url','tornado'); ?></label>
                <input type="text" name="instagram_url" placeholder="<?php echo __('https://instagram.com/username','tornado'); ?>" value="<?php echo get_option('instagram_url'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="linkedin_url"><?php echo __('Linked-in url','tornado'); ?></label>
                <input type="text" name="linkedin_url" placeholder="<?php echo __('https://linkedin.com/@username','tornado'); ?>" value="<?php echo get_option('linkedin_url'); ?>">
            </div>
        </div>
        <!-- // Control Item -->
          <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="google_Plus_url"><?php echo __('Google-Plus url','tornado'); ?></label>
                <input type="text" name="google_Plus_url" placeholder="<?php echo __('https://www.google.com/','tornado'); ?>" value="<?php echo get_option('google_Plus_url'); ?>">
            </div>
        </div>
        <!-- // Control Item -->
          <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="youtube_url"><?php echo __('Youtube url','tornado'); ?></label>
                <input type="text" name="youtube_url" placeholder="<?php echo __('https://www.youtube.com/','tornado'); ?>" value="<?php echo get_option('youtube_url'); ?>">
            </div>
        </div>
        <!-- // Control Item -->
    </div>
</div>
<!-- // Panel Block -->