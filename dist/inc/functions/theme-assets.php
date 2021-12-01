<?php 
    /**
     * Tornado Theme Assets
     * @package Tornado Wordpress
     * Including Tornado UI Theme Assets CSS/JS Files
     * 
     * ========> Reference by Comments <=======
     * 00 - Register CSS Files
     * 02 - Register Javascript Files
     * 03 - Gutenberg Assets
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    //======== Register CSS Files ========//
    function tornado_css() {
        wp_enqueue_style('tornado-icon', get_template_directory_uri() . '../../dist/css/tornado-icons.css', false , NULL , 'all'); 
        wp_enqueue_style('theme-options-css', get_template_directory_uri() . '../../dist/css/theme-options.css', false , NULL , 'all'); 
        wp_enqueue_style('tornado-icon-map', get_template_directory_uri() . '../../dist/css/tornado-icons.css.map', false , NULL , 'all');
        wp_enqueue_style('tornado-css-map', get_template_directory_uri() . '../../dist/css/tornado.css.map', false , NULL , 'all');
        wp_enqueue_style('tornado-rtl-css-map', get_template_directory_uri() . '../../dist/css/tornado-rtl.css.map', false , NULL , 'all'); 
        wp_enqueue_style('tornado-icon-map', get_template_directory_uri() . '../../dist/css/tornado-icons.css.map', false , NULL , 'all'); 
        wp_enqueue_style('theme-options-css-map', get_template_directory_uri() . '../../dist/css/theme-options.css.map', false , NULL , 'all'); 
        wp_enqueue_style('gutenburg-css-map', get_template_directory_uri() . '../../dist/css/gutenburg.css.map', false , NULL , 'all'); 

        //=== RTL CSS ===//
        if (is_rtl()) {
            wp_enqueue_style('tornado-rtl', get_template_directory_uri() . '../../dist/css/tornado-rtl.css', false , NULL , 'all'); 
    
        } 
        //=== LTR CSS ===//
        else { wp_enqueue_style('tornado', get_template_directory_uri() . '../../dist/css/tornado.css', false , NULL , 'all'); }
    };

    //======== Register Javascript Files ========//
    function tornado_js() {
        // Include Tornado JS File
        wp_enqueue_script('tornado_js', get_template_directory_uri() . '../../dist/js/tornado.min.js', false , NULL , true);
         // Include Tornado JS File
        wp_enqueue_script('blocks_js', get_template_directory_uri() . '../../dist/js/blocks.min.js', false , NULL , true);
         // Include Tornado JS File
        wp_enqueue_script('blocks_map_js', get_template_directory_uri() . '../../dist/js/blocks.min.js.map', false , NULL , true);
         // Include Tornado JS File
        wp_enqueue_script('tornado_map_js', get_template_directory_uri() . '../../dist/js/tornado.min.js.map', false , NULL , true);
          // Include Tornado JS File
        wp_enqueue_script('wow_js', get_template_directory_uri() . '../../dist/js/wow.js', false , NULL , true);
    };
   //==== Run Assets Files By Gutenberg Hooks ====//
    add_action ('enqueue_block_assets','tornado_css');
    add_action ('enqueue_block_assets','tornado_js');

    //==== Gutenberg Assets ====//
    function gutenberg_tornado() {
        // Include Blocks JS
        wp_enqueue_script('tornado_admin_js', get_template_directory_uri() . '../../dist/js/blocks.min.js' , array( 'wp-blocks', 'wp-element' ) , NULL , true);
        // Include Blocks CSS
        wp_enqueue_style('tornado_admin_css', get_template_directory_uri() . '../../dist/css/gutenburg.css', false , NULL , 'all');
        wp_enqueue_style('tornado_adminn_css', get_template_directory_uri() . '../../dist/css/tornado.css.map', false , NULL , 'all');

    }
    //==== Hook Gutenberg assets ====//
    add_action( 'enqueue_block_editor_assets', 'gutenberg_tornado' );
?>