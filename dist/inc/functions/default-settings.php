<?php
    /**
     * Tornado Theme Initials
     * @package Tornado Wordpress
     * Setup theme defaults and registers support for various WordPress features.
     * 
     * Note that tornado_setup function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     * 
     * ========> Reference by Comments <=======
     * 00 - Default Meta Options
     * 01 - Default Design Global Options
     * 02 - Default Design Colors Options
     * 03 - Default Design Fonts Options
     * 
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    if (!function_exists('tornado_default') ) :
        function tornado_default() {
            //=====> Default Meta Options <=====//
            if(!get_option('meta_keywords')) {
                update_option('meta_keywords', 'كلمة , مفتاحية , تجريبية , Tornado UI');
            }

            if(!get_option('meta_graph_cover')) {
                update_option('meta_graph_cover', get_template_directory_uri() . '/screenshot.png');
            }

            if(!get_option('meta_copyrights')) {
                update_option('meta_copyrights', 'جميع الحقوق محفوظة لــ Tornado UI');
            }

            //=====> Default Design Global Options <=====//
            if(!get_option('theme_logo')) {
                update_option('theme_logo', get_template_directory_uri() . '/dist/img/logo.png' );
            }

            //=====> Default Design Colors Options <=====//
            if(!get_option('primary_color')) {                
                update_option('primary_color', '#4166d6');
            }

            if(!get_option('primary_color_hover')) {                
                update_option('primary_color_hover', '#2e4dc9');
            }

            if(!get_option('secondary_color')) {                
                update_option('secondary_color', '#de670f');
            }

            if(!get_option('secondary_color_hover')) {                
                update_option('secondary_color_hover', '#eaa711');
            }

            if(!get_option('reverse_color')) {                
                update_option('reverse_color', '#FFFFFF');
            }

            if(!get_option('reverse_color_dark')) {                
                update_option('reverse_color_dark', '#1c1c1c');
            }

            if(!get_option('typo_color')) {                
                update_option('typo_color', '#555555');
            }

            //=====> Default Design Google Fonts <=====//
            if(!get_option('primary_font')) {
                update_option('primary_font', "Roboto");
            }

            if(!get_option('secondary_font')) {
                update_option('secondary_font', "Roboto");
            }

            if(!get_option('primary_font_rtl')) {
                update_option('primary_font_rtl', "Almarai");
            }

            if(!get_option('secondary_font_rtl')) {
                update_option('secondary_font_rtl', "Almarai");
            }

            //=====> Default Design Custom Fonts <=====//
            if(!get_option('custom_primary_font')) {
                update_option('custom_primary_font', "Roboto");
            }

            if(!get_option('custom_secondary_font')) {
                update_option('custom_secondary_font', "Roboto");
            }

            if(!get_option('custom_primary_font_rtl')) {
                update_option('primary_font_rtl', "DIN NEXT");
            }

            if(!get_option('custom_secondary_font_rtl')) {
                update_option('secondary_font_rtl', "DIN NEXT");
            }

            //=====> Default Design Fonts Options <=====//
            if(!get_option('base_l_size')) {
                update_option('base_l_size', '16px');
            }

            if(!get_option('base_m_size')) {
                update_option('base_m_size', '15px');
            }

            if(!get_option('base_s_size')) {
                update_option('base_s_size', '14px');
            }

            if(!get_option('base_line_height')) {
                update_option('base_line_height', '1.625');
            }

            if(!get_option('normal_weight')) {
                update_option('normal_weight', '400');
            }

            if(!get_option('medium_weight')) {
                update_option('medium_weight', '500');
            }
            
            if(!get_option('strong_weight')) {
                update_option('strong_weight', '600');
            }
        }
    endif;

    add_action( 'after_setup_theme', 'tornado_default' );
?>