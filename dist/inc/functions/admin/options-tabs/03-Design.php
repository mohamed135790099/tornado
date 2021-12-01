<?php
    /**
     * Tornado Theme - Options Tab
     * @package Tornado Wordpress
    */
    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
    //====== Google Fonts API Info =======//
    $google_fonts_api = "AIzaSyASxx2HUwsHJ0gXmEi5V1xJyBI6WeTq8Hk";
    $google_fonts_url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=' . $google_fonts_api;
    $google_fonts_args = array(
        'timeout'     => 15,
        'redirection' => 10,
        'httpversion' => '1.0',
    );
    //====== Fetch Google Fonts =======//
    $google_fonts_response = wp_remote_get( $google_fonts_url, $google_fonts_args );
    //====== Decode Google Fonts Json =======//
    $google_fonts_body = json_decode($google_fonts_response['body']);
    //====== get the Fonts List Array =======//
    $font_list = $google_fonts_body->items;
?>

<!-- Page Head -->
<div class="page-head">
    <h1><?php echo __('Design Options','tornado'); ?></h1>
</div>

<?php
    //=========== Google Fonts Error ===========//
    if (get_option('google_fonts') === '1' && is_wp_error($google_fonts_response)) :
        echo '<div class="alert danger">'.esc_html( $google_fonts_response->get_error_message()).'</div>';
    endif;
?>

<!-- Panel Block -->
<div class="options-panel">
    <!-- Panel Title -->
    <h2 class="panel-title"><?php echo __('Logo and Colors','tornado'); ?></h2>
    <div class="row no-gutter">
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="theme_logo"><?php echo __('Theme Logo','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control iconic">
                    <?php 
                        if (!get_option('theme_logo')) {
                            $logo_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $logo_value = get_option('theme_logo');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="theme_logo" class="uploader-input" value="<?php echo $logo_value; ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $logo_value; ?>" alt="" class="image-prev">
                    <button type="button" class="uploader-btn button button-primary ti-play-work-up"></button>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="theme_logo_mobile"><?php echo __('Theme Logo Mobile','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control iconic">
                    <?php 
                        if (!get_option('theme_logo_mobile')) {
                            $logo_mobile_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $logo_mobile_value = get_option('theme_logo_mobile');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="theme_logo_mobile" class="uploader-input" value="<?php echo $logo_mobile_value; ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $logo_mobile_value; ?>" alt="" class="image-prev">
                    <button type="button" class="uploader-btn button button-primary ti-play-work-up"></button>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="primary_color">
                    <?php echo __('Primary Color','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Theme Design Primary Color','tornado'); ?>"></span>
                </label>
                <div class="color-picker">
                    <?php $color_val = get_option('primary_color'); ?>
                    <input type="text" name="primary_color" value="<?php echo $color_val; ?>" placeholder="<?php echo $color_val; ?>">
                    <div class="color-prev" style="background-color:<?php echo $color_val; ?>"></div>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="primary_color_hover">
                    <?php echo __('Primary Hover','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Theme Design Primary Hover Effect Color','tornado'); ?>"></span>
                </label>
                <div class="color-picker">
                    <?php $color_val = get_option('primary_color_hover'); ?>
                    <input type="text" name="primary_color_hover" value="<?php echo $color_val; ?>" placeholder="<?php echo $color_val; ?>">
                    <div class="color-prev" style="background-color:<?php echo $color_val; ?>"></div>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="secondary_color">
                    <?php echo __('Secondary Color','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Theme Design Secondary Color','tornado'); ?>"></span>
                </label>
                <div class="color-picker">
                    <?php $color_val = get_option('secondary_color'); ?>
                    <input type="text" name="secondary_color" value="<?php echo $color_val; ?>" placeholder="<?php echo $color_val; ?>">
                    <div class="color-prev" style="background-color:<?php echo $color_val; ?>"></div>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="secondary_color_hover">
                    <?php echo __('Secondary Hover','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Theme Design Secondary Hover Effect Color','tornado'); ?>"></span>
                </label>
                <div class="color-picker">
                    <?php $color_val = get_option('secondary_color_hover'); ?>
                    <input type="text" name="secondary_color_hover" value="<?php echo $color_val; ?>" placeholder="<?php echo $color_val; ?>">
                    <div class="color-prev" style="background-color:<?php echo $color_val; ?>"></div>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="typo_color">
                    <?php echo __('Text Color','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Theme Design Text Color','tornado'); ?>"></span>
                </label>
                <div class="color-picker">
                    <?php $color_val = get_option('typo_color'); ?>
                    <input type="text" name="typo_color" value="<?php echo $color_val; ?>" placeholder="<?php echo $color_val; ?>">
                    <div class="color-prev" style="background-color:<?php echo $color_val; ?>"></div>
                </div>
            </div>
        </div>
        <!-- // Control Item -->
    </div>
</div>
<!-- // Panel Block -->

<!-- // Panel Block -->

<!-- Panel Block -->
<div class="options-panel">
    <!-- Panel Title -->
    <h2 class="panel-title"><?php echo __('About Page','tornado'); ?></h2>
    <div class="row no-gutter">
        <div class="row no-gutter">
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="image_body"><?php echo __(' About Image ','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control iconic">
                    <?php 
                        if (!get_option('image_body')) {
                            $logo_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $logo_value = get_option('image_body');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="image_body" class="uploader-input" value="<?php echo $logo_value; ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $logo_value; ?>" alt="" class="image-prev">
                    <button type="button" class="uploader-btn button button-primary ti-play-work-up"></button>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="Our_vision"><?php echo __('Our vision','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control iconic">
                    <?php 
                        if (!get_option('Our_vision')) {
                            $logo_mobile_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $logo_mobile_value = get_option('Our_vision');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="Our_vision" class="uploader-input" value="<?php echo $logo_mobile_value; ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $logo_mobile_value; ?>" alt="" class="image-prev">
                    <button type="button" class="uploader-btn button button-primary ti-play-work-up"></button>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="Our_Mission"><?php echo __('Our Message','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control iconic">
                    <?php 
                        if (!get_option('Our_Mission')) {
                            $logo_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $logo_value = get_option('Our_Mission');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="Our_Mission" class="uploader-input" value="<?php echo $logo_value; ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $logo_value; ?>" alt="" class="image-prev">
                    <button type="button" class="uploader-btn button button-primary ti-play-work-up"></button>
                </div>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="theme_logo_mobile"><?php echo __('Theme body service3','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control iconic">
                    <?php 
                        if (!get_option('theme_logo_bodya')) {
                            $logo_mobile_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $logo_mobile_value = get_option('theme_logo_bodya');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="theme_logo_bodya" class="uploader-input" value="<?php echo $logo_mobile_value; ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $logo_mobile_value; ?>" alt="" class="image-prev">
                    <button type="button" class="uploader-btn button button-primary ti-play-work-up"></button>
                </div>
            </div>
        </div>
     
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="body_code">
                    <?php echo __('About Code','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </body> closing tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="body_code" class="ltr h120" id="codemirror-3"><?php echo esc_html__(get_option('body_code')); ?></textarea>
                </div>
            </div>
        </div>
           <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="body_code2">
                    <?php echo __('Increase the number of paragraphs about ','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </body> closing tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="body_code2" class="ltr h120" id="codemirror-3"><?php echo esc_html__(get_option('body_code2')); ?></textarea>
                </div>
            </div>
        </div>
         <!-- Control Item -->
          <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="our_mission_code">
                    <?php echo __('our mission code','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </body> closing tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="our_mission_code" class="ltr h120" id="codemirror-3"><?php echo esc_html__(get_option('our_mission_code')); ?></textarea>
                </div>
            </div>
        </div>
         <!-- Control Item -->
               <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="our_mission_code2">
                    <?php echo __('increase number pargraphs mission','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </body> closing tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="our_mission_code2" class="ltr h120" id="codemirror-3"><?php echo esc_html__(get_option('our_mission_code2')); ?></textarea>
                </div>
            </div>
        </div>
         <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="our_vision_code">
                    <?php echo __('our vision code','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </body> closing tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="our_vision_code" class="ltr h120" id="codemirror-3"><?php echo esc_html__(get_option('our_vision_code')); ?></textarea>
                </div>
            </div>
        </div>
         <!-- Control Item -->
        <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="our_vision_code2">
                    <?php echo __('Increase the number of paragraphs vision','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </body> closing tag','tornado'); ?>"></span>
                </label>
                <div class="control-wraper">
                    <textarea name="our_vision_code2" class="ltr h120" id="codemirror-3"><?php echo esc_html__(get_option('our_vision_code2')); ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>  

        <!-- Panel Title -->
        <h2 class="panel-title"><?php echo __('Blog Details','tornado'); ?></h2>
        <div class="row no-gutter">
            <div class="row no-gutter">
                 <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="image_bloog"><?php echo __('Blog Image','tornado'); ?></label>
                <!-- Image Uploader -->  
                <div class="media-uploader-control iconic">
                    <?php 
                        if (!get_option('image_bloog')) {
                            $logo_mobile_value = 'https://via.placeholder.com/320x50?text=PLACEHOLDER';
                        } else {
                            $logo_mobile_value = get_option('image_bloog');
                        }
                    ?>
                    <!-- Image Input -->
                    <input type="hidden" name="image_bloog" class="uploader-input" value="<?php echo $logo_mobile_value; ?>">
                    <!-- Image Preview and Button -->
                    <img src="<?php echo $logo_mobile_value; ?>" alt="" class="image-prev">
                    <button type="button" class="uploader-btn button button-primary ti-play-work-up"></button>
                </div>
            </div>
        </div>
            <!-- Control Item -->
            <div class="control-item col-12 col-l-12 <?php if (is_rtl()) { echo 'rtl'; }?>">
                <div class="content-box">
                    <label for="blog_details">
                        <?php echo __('Blog Details','tornado'); ?>
                        <span class="ti-help-mark help-btn" data-txt="<?php echo __('this code will be added before </body> closing tag','tornado'); ?>"></span>
                    </label>
                    <div class="control-wraper">
                        <textarea name="blog_details" class="ltr h240" id="codemirror-3"><?php echo esc_html__(get_option('blog_details')); ?></textarea>
                    </div>
                </div>
            </div>
            <!-- Control Item -->
    </div>
</div>
</div>


<!-- Panel Block -->
<div class="options-panel">
    <!-- Panel Title -->
    <h2 class="panel-title"><?php echo __('Font Options','tornado'); ?></h2>
    <div class="row no-gutter">
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="primary_font">
                    <?php echo __('Google Fonts','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Enable/Disable Google Fonts','tornado'); ?>"></span>
                </label>
                <label class="toggle-button">
                    <input type="checkbox" name="google_fonts" id="google-fonts-status" value="1" <?php checked(1, get_option('google_fonts'), true); ?>>
                    <span></span>
                </label>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (get_option('google_fonts') !== '1') { echo 'hidden'; } ?> google-fonts-controler <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="primary_font">
                    <?php echo __('Headers Font','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Headers and Titles Font Family','tornado'); ?>"></span>
                </label>
                <select name="primary_font" class="advanced-select" data-value="<?php echo get_option('primary_font'); ?>">
                    <?php
                        foreach ($font_list as $font ) :
                            //====== Check if Selected ======//
                            if ($font->family == get_option('primary_font')) {$is_selected = 'selected';} 
                            else {$is_selected = '';}
                            //====== Print Font Item ======//
                            echo '<option value="'.esc_attr($font->family).'">'.esc_html( $font->family).'</option>';
                        endforeach;
                    ?>
                </select>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (get_option('google_fonts') !== '1') { echo 'hidden'; } ?> google-fonts-controler <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="secondary_font">
                    <?php echo __('Normal Font','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Normal Text Font Family','tornado'); ?>"></span>
                </label>
                <select name="secondary_font" class="advanced-select" data-value="<?php echo get_option('secondary_font'); ?>">
                    <?php
                        foreach ($font_list as $font ) :
                            //====== Check if Selected ======//
                            if ($font->family == get_option('secondary_font')) {$is_selected = 'selected';} 
                            else {$is_selected = '';}
                            //====== Print Font Item ======//
                            echo '<option value="'.esc_attr($font->family).'">'.esc_html( $font->family).'</option>';
                        endforeach;
                    ?>
                </select>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (get_option('google_fonts') !== '1') { echo 'hidden'; } ?> google-fonts-controler <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="primary_font_rtl">
                    <?php echo __('Headers Font RTL','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Headers and Titles Font Family','tornado'); ?>"></span>
                </label>
                <select name="primary_font_rtl" class="advanced-select" data-value="<?php echo get_option('primary_font_rtl'); ?>">
                    <?php
                        foreach ($font_list as $font ) :
                            //====== Check if Selected ======//
                            if ($font->family == get_option('primary_font_rtl')) {$is_selected = 'selected';} 
                            else {$is_selected = '';}
                            //====== Print Font Item ======//
                            echo '<option value="'.esc_attr($font->family).'">'.esc_html( $font->family).'</option>';
                        endforeach;
                    ?>
                </select>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (get_option('google_fonts') !== '1') { echo 'hidden'; } ?> google-fonts-controler <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="secondary_font_rtl">
                    <?php echo __('Normal Font RTL','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Normal Text Font Family','tornado'); ?>"></span>
                </label>
                <select name="secondary_font_rtl" class="advanced-select" data-value="<?php echo get_option('secondary_font_rtl'); ?>">
                    <?php
                        foreach ($font_list as $font ) :
                            //====== Print Font Item ======//
                            echo '<option value="'.esc_attr($font->family).'">'.esc_html( $font->family).'</option>';
                        endforeach;
                    ?>
                </select>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (get_option('google_fonts') === '1') { echo 'hidden'; } ?> custom-fonts-controler <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="custom_primary_font">
                    <?php echo __('Headers Font','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Headers and Titles Font Family','tornado'); ?>"></span>
                </label>
                <input type="text" name="custom_primary_font" value="<?php echo get_option('custom_primary_font'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (get_option('google_fonts') === '1') { echo 'hidden'; } ?> custom-fonts-controler <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="custom_secondary_font">
                    <?php echo __('Normal Font','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Normal Text Font Family','tornado'); ?>"></span>
                </label>
                <input type="text" name="custom_secondary_font" value="<?php echo get_option('custom_secondary_font'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (get_option('google_fonts') === '1') { echo 'hidden'; } ?> custom-fonts-controler <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="primary_font_rtl">
                    <?php echo __('Headers Font RTL','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Headers and Titles Font Family RTL','tornado'); ?>"></span>
                </label>
                <input type="text" name="custom_primary_font_rtl" value="<?php echo get_option('custom_primary_font_rtl'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (get_option('google_fonts') === '1') { echo 'hidden'; } ?> custom-fonts-controler <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="custom_secondary_font_rtl">
                    <?php echo __('Normal Font RTL','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Normal Text Font Family RTL','tornado'); ?>"></span>
                </label>
                <input type="text" name="custom_secondary_font_rtl" value="<?php echo get_option('custom_secondary_font_rtl'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="normal_weight">
                    <?php echo __('Font Normal Weight','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Font Normal/Regular Weight.','tornado'); ?>"></span>
                </label>
                <select class="chevron-select" name="normal_weight" data-value="<?php echo get_option('normal_weight');?>">
                    <option value="100">Ultra light</option>
                    <option value="200">Light</option>
                    <option value="300">Book</option>
                    <option value="400">Regular</option>
                    <option value="500">Medium</option>
                    <option value="600">Semi-bold</option>
                    <option value="700">Bold</option>
                    <option value="800">Heavy</option>
                    <option value="900">Heavy-black</option>
                </select>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="medium_weight">
                    <?php echo __('Font Medium Weight','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Font Medium/Semi-Bold Weight.','tornado'); ?>"></span>
                </label>
                <select class="chevron-select" name="medium_weight" data-value="<?php echo get_option('medium_weight');?>">
                    <option value="100">Ultra light</option>
                    <option value="200">Light</option>
                    <option value="300">Book</option>
                    <option value="400">Regular</option>
                    <option value="500">Medium</option>
                    <option value="600">Semi-bold</option>
                    <option value="700">Bold</option>
                    <option value="800">Heavy</option>
                    <option value="900">Heavy-black</option>
                </select>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="strong_weight">
                    <?php echo __('Font Bold Weight','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Font Bold Weight.','tornado'); ?>"></span>
                </label>
                <select class="chevron-select" name="strong_weight" data-value="<?php echo get_option('strong_weight');?>">
                    <option value="100">Ultra light</option>
                    <option value="200">Light</option>
                    <option value="300">Book</option>
                    <option value="400">Regular</option>
                    <option value="500">Medium</option>
                    <option value="600">Semi-bold</option>
                    <option value="700">Bold</option>
                    <option value="800">Heavy</option>
                    <option value="900">Heavy-black</option>
                </select>
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="base_l_size">
                    <?php echo __('Font Size','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Desktop Base Font Size in px','tornado'); ?>"></span>
                </label>
                <input type="text" name="base_l_size" placeholder="<?php echo '16px'; ?>" value="<?php echo get_option('base_l_size'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="base_m_size">
                    <?php echo __('Tablet Font Size','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Tablet Base Font Size in px','tornado'); ?>"></span>
                </label>
                <input type="text" name="base_m_size" placeholder="<?php echo '16px'; ?>" value="<?php echo get_option('base_m_size'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="base_s_size">
                    <?php echo __('Mobile Font Size','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Mobile Base Font Size in px','tornado'); ?>"></span>
                </label>
                <input type="text" name="base_s_size" placeholder="<?php echo '16px'; ?>" value="<?php echo get_option('base_s_size'); ?>">
            </div>
        </div>
        <!-- Control Item -->
        <div class="control-item col-12 col-l-6 <?php if (is_rtl()) { echo 'rtl'; }?>">
            <div class="content-box">
                <label for="base_line_height">
                    <?php echo __('Font Line-Height','tornado'); ?>
                    <span class="ti-help-mark help-btn" data-txt="<?php echo __('Font Base Line Hight in points or precentage','tornado'); ?>"></span>
                </label>
                <input type="text" name="base_line_height" placeholder="<?php echo '1.658'; ?>" value="<?php echo get_option('base_line_height'); ?>">
            </div>
        </div>
        <!-- // Control Item -->
    </div>
</div>
<!-- // Panel Block -->