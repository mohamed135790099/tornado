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
     * 00 - Translation Support
     * 01 - Register Menu's Locations
     * 02 - Enable Page Title.
     * 03 - Enable Post Thumbnails Image.
     * 04 - Enable RSS feed links
     * 05 - Support HTML5 Syntax
     * 06 - Support selective refresh for widgets
     * 07 - Support Gutenberg Wide Images
     * 08 - Jetpack Infinite Scroll.
     * 09 - Jetpack Infinite Scroll Custom render.
     * 10 - Jetpack Responsive Videos.
     * 11 - Jetpack Content Options.
     * 12 - Declear WooCommerce Support
     * 13 - Default Meta Options
     * 14 - Default Design Global Options
     * 15 - Default Design Colors Options
     * 16 - Default Design Fonts Options
     * 
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    if (!function_exists('tornado_setup') ) :
        function tornado_setup() {
            //====== Translation Support ======//
            load_theme_textdomain( 'tornado', get_template_directory() . '/languages' );

            //======== Register Menu's Locations ========//
            register_nav_menus( array(
                'main-menu' => 'Header Main Menu',
                'sidebar-menu' => 'Sidebar Menu',
            ));

            //=====> Enable Page Title. <=====//
            add_theme_support('title-tag'); 

            //=====> Enable Post Thumbnails Image. <=====//
            add_theme_support( 'post-thumbnails' );

            //=====> Enable RSS feed links <=====//
            add_theme_support( 'automatic-feed-links' );

            //=====> Support HTML5 Syntax <=====//
            add_theme_support('html5', array(
                'comment-list',
                'comment-form',
                'search-form',
                'gallery',
                'caption',
                'search-form',
                'style',
                'script',
            ));

            //=====> Support selective refresh for widgets <=====//
            add_theme_support( 'customize-selective-refresh-widgets' );

            //=====> Support Gutenberg Wide Images <=====//
            add_theme_support('align-wide');

            //======> Jetpack Infinite Scroll. <=====//
            add_theme_support('infinite-scroll',
                array(
                    'container' => 'main',
                    'render'    => 'tornado_infinite_scroll_render',
                    'footer'    => 'page',
                )
            );

            //======> Jetpack Infinite Scroll Custom render <=====//
            function tornado_infinite_scroll_render() {
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/blogs/blog', 'block' );
                }
            }

            //======> Jetpack Responsive Videos. <=====//
            add_theme_support( 'jetpack-responsive-videos' );

            //======> Jetpack Content Options. <=====//
            add_theme_support('jetpack-content-options',
                array(
                    'post-details' => array(
                        'stylesheet' => 'tornado-style',
                        'date'       => '.post-date',
                        'categories' => '.post-cats',
                        'tags'       => '.post-tags',
                        'author'     => '.post-author',
                        'comment'    => '.comments-link',
                    ),

                    'featured-images' => array(
                        'archive' => true,
                        'post'    => true,
                        'page'    => true,
                    ),
                )
            );

            //=====> Declear WooCommerce Support <=====//
            // add_theme_support('woocommerce');
        }
    endif;

    add_action( 'after_setup_theme', 'tornado_setup' );
?>