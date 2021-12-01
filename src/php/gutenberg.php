<?php
    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;
    if (!defined('WPINC')) {die;}

    //==== Custom Block Categories ====//
    add_filter( 'block_categories', 'tornado_categories', 10, 2);
    function tornado_categories( $categories, $post ) {
        return array_merge( $categories, array(
            //==== Tornado =====//
            array(
                'slug' => 'tornado',
                'title' => __( 'Tornado Blocks', 'tornado' ),
            ),
            //==== Theme Blocks =====//
            array(
                'slug' => 'tornado-theme',
                'title' => __('Design Blocks', 'tornado'),
            ),
        ));
    }

    //==== Calling Dynamic Block Example =====//
    // require dirname(__FILE__) . '/home-services.php';
?>