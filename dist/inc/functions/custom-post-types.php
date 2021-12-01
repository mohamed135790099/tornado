<?php
    /**
     * Tornado Custom Post Types
     * @package Tornado Wordpress
     * Registering Custom Posts Types or Custom Content Modules.
     * 
     * ========> Reference by Comments <=======
     * 00 - Blog Post Type
     * 02 - Custom Taxonomy Example
    */
    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

function wms_blog_init() {
    $labels = array(
        'name' => '',
        'singular_name' => 'Blog',
        'add_new' => 'Add Blog',
        'add_new_item' => 'Add New Blog',
        'edit_item' => 'Edit Blog',
        'new_item' => 'New Blog',
        'all_items' => 'All Blog',
        'view_item' => 'View Blog',
        'search_items' => 'Search Blog',
        'not_found' =>  'No post Blog',
        'not_found_in_trash' => 'No post found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Blog'
    );

    $args = array(
        'labels' => $labels,
        'description'   => 'Holds our Blog poste specific data',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'blog' ),
        'capability_type' => 'post',
        'has_archive' => false, 
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor','comments','thumbnail', 'page-attributes','custom-fields','gallery','revisions','post-thumbnails',)
    ); 
    register_post_type( 'blog', $args );
}
add_action( 'init', 'wms_blog_init' );



function wms_service_init() {
    $labels = array(
        'name' => '',
        'singular_name' => 'Service',
        'add_new' => 'Add Service',
        'add_new_item' => 'Add New Service',
        'edit_item' => 'Edit Service',
        'new_item' => 'New Service',
        'all_items' => 'All Service',
        'view_item' => 'View Service',
        'search_items' => 'Search Service',
        'not_found' =>  'No Post Service',
        'not_found_in_trash' => 'No Post found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Service'
    );

    $args = array(
        'labels' => $labels,
        'description'   => 'Holds our Service poste specific data',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'service' ),
        'capability_type' => 'post',
        'has_archive' => false, 
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor','comments','thumbnail', 'page-attributes','custom-fields','gallery','revisions','post-thumbnails',)
    ); 
    register_post_type( 'service', $args );
}
add_action( 'init', 'wms_service_init' );


function wms_advantage_init() {
    $labels = array(
        'name' => '',
        'singular_name' => 'Advantage',
        'add_new' => 'Add Advantage',
        'add_new_item' => 'Add New Advantage',
        'edit_item' => 'Edit Advantage',
        'new_item' => 'New Advantage',
        'all_items' => 'All Advantage',
        'view_item' => 'View Advantage',
        'search_items' => 'Search Advantage',
        'not_found' =>  'No Post Advantage',
        'not_found_in_trash' => 'No post found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'advantage'
    );

    $args = array(
        'labels' => $labels,
        'description'   => 'Holds our Advantage poste specific data',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'advantage' ),
        'capability_type' => 'post',
        'has_archive' => false, 
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor','comments','thumbnail', 'page-attributes','custom-fields','gallery','revisions','post-thumbnails',)
    ); 
    register_post_type( 'advantage', $args );
}
add_action( 'init', 'wms_advantage_init' );

function wms_opinion_init() {
    $labels = array(
        'name' => '',
        'singular_name' => 'Opinion',
        'add_new' => 'Add Opinion',
        'add_new_item' => 'Add New Opinion',
        'edit_item' => 'Edit Opinion',
        'new_item' => 'New Opinion',
        'all_items' => 'All Opinion',
        'view_item' => 'View Opinion',
        'search_items' => 'Search Opinion',
        'not_found' =>  'No Slider Opinion',
        'not_found_in_trash' => 'No Opinion found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'views slider'
    );

    $args = array(
        'labels' => $labels,
        'description'   => 'Holds our Opinion poste specific data',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'opinion' ),
        'capability_type' => 'post',
        'has_archive' => false, 
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor','comments','thumbnail', 'page-attributes','custom-fields','gallery','revisions','post-thumbnails',)
    ); 
    register_post_type( 'opinion', $args );
}
add_action( 'init', 'wms_opinion_init' );

add_action( 'init', 'wms_advantage_init' );

function wms_customer_init() {
    $labels = array(
        'name' => '',
        'singular_name' => 'Customer',
        'add_new' => 'Add Customer',
        'add_new_item' => 'Add New Customer',
        'edit_item' => 'Edit Customer',
        'new_item' => 'New Customer',
        'all_items' => 'All Customer',
        'view_item' => 'View Customer',
        'search_items' => 'Search Customer',
        'not_found' =>  'No Slider Customer',
        'not_found_in_trash' => 'No Customer found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'customer slider'
    );

    $args = array(
        'labels' => $labels,
        'description'   => 'Holds our Customer poste specific data',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'customer' ),
        'capability_type' => 'post',
        'has_archive' => false, 
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor','comments','thumbnail', 'page-attributes','custom-fields','gallery','revisions','post-thumbnails',)
    ); 
    register_post_type( 'customer', $args );
}
add_action( 'init', 'wms_customer_init' );



function wms_team_init() {
    $labels = array(
        'name' => '',
        'singular_name' => 'Team',
        'add_new' => 'Add Team',
        'add_new_item' => 'Add New Team',
        'edit_item' => 'Edit Team',
        'new_item' => 'New Team',
        'all_items' => 'All Team',
        'view_item' => 'View Team',
        'search_items' => 'Search Team',
        'not_found' =>  'No Slider Team',
        'not_found_in_trash' => 'No Team found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Team slider'
    );

    $args = array(
        'labels' => $labels,
        'description'   => 'Holds our Team poste specific data',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'team' ),
        'capability_type' => 'post',
        'has_archive' => false, 
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor','comments','thumbnail', 'page-attributes','custom-fields','gallery','revisions','post-thumbnails',)
    ); 
    register_post_type( 'team', $args );
}
add_action( 'init', 'wms_team_init' );

add_action( 'init', 'wms_create_blog_taxonomies', 0 );

//create SlideShow Category for the post type "slider"
function wms_create_blog_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'                => _x( 'BlogShows', 'taxonomy general name' ),
        'singular_name'       => _x( 'BlogShow', 'taxonomy singular name' ),
        'search_items'        => __( 'Search Genres' ),
        'all_items'           => __( 'All BlogShows' ),
        'parent_item'         => __( 'Parent BlogShow' ),
        'parent_item_colon'   => __( 'Parent BlogShow:' ),
        'edit_item'           => __( 'Edit BlogShow' ), 
        'update_item'         => __( 'Update BlogShow' ),
        'add_new_item'        => __( 'Add New BlogShow' ),
        'new_item_name'       => __( 'New BlogShow Name' ),
        'menu_name'           => __( 'Blog Show' )
    );    

    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'blogeshow' )
    );
    register_taxonomy( 'blogshow', array( 'blog' ), $args );
}

add_action( 'init', 'wms_create_service_taxonomies', 0 );
function wms_create_service_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'                => _x( 'ServiceShows', 'taxonomy general name' ),
        'singular_name'       => _x( 'ServiceShow', 'taxonomy singular name' ),
        'search_items'        => __( 'Search Genres' ),
        'all_items'           => __( 'All ServiceShows' ),
        'parent_item'         => __( 'Parent ServiceShow' ),
        'parent_item_colon'   => __( 'Parent ServiceShow:' ),
        'edit_item'           => __( 'Edit ServiceShow' ), 
        'update_item'         => __( 'Update ServiceShow' ),
        'add_new_item'        => __( 'Add New ServiceShow' ),
        'new_item_name'       => __( 'New ServiceShow Name' ),
        'menu_name'           => __( 'Service Show' )
    );    

    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'serviceshow' )
    );
    register_taxonomy( 'serviceshow', array( 'service' ), $args );
}
add_action( 'init', 'wms_create_advantage_taxonomies', 0 );
function wms_create_advantage_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'                => _x( 'AdvantageShows', 'taxonomy general name' ),
        'singular_name'       => _x( 'AdvantageShow', 'taxonomy singular name' ),
        'search_items'        => __( 'Search Genres' ),
        'all_items'           => __( 'All AdvantageShows' ),
        'parent_item'         => __( 'Parent AdvantageShow' ),
        'parent_item_colon'   => __( 'Parent AdvantageShow:' ),
        'edit_item'           => __( 'Edit AdvantageShow' ), 
        'update_item'         => __( 'Update AdvantageShow' ),
        'add_new_item'        => __( 'Add New AdvantageShow' ),
        'new_item_name'       => __( 'New AdvantageShow Name' ),
        'menu_name'           => __( 'Advantage Show' )
    );    

    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'advantageshow' )
    );
    register_taxonomy( 'advantageshow', array( 'advantage' ), $args );
}

/**
 * Create Custo Post Type for Slideres
 */
 

function wms_slider_init() {
    $labels = array(
        'name' => 'Slider',
        'singular_name' => 'Slider',
        'add_new' => 'Add Slider',
        'add_new_item' => 'Add New Slider',
        'edit_item' => 'Edit Slider',
        'new_item' => 'New Slider',
        'all_items' => 'All Sliders',
        'view_item' => 'View Slider',
        'search_items' => 'Search Sliders',
        'not_found' =>  'No Slider found',
        'not_found_in_trash' => 'No Slider found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Sliders'
    );

    $args = array(
        'labels' => $labels,
        'description'   => 'Holds our Slider poste specific data',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => array( 'slug' => 'slider' ),
        'capability_type' => 'post',
        'has_archive' => false, 
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes','custom-fields','gallery','revisions','post-thumbnails',)
    ); 
    register_post_type( 'slider', $args );
}
add_action( 'init', 'wms_slider_init' );
add_action( 'init', 'wms_create_slider_taxonomies', 0 );
//create SlideShow Category for the post type "slider"
function wms_create_slider_taxonomies() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'                => _x( 'SlideShows', 'taxonomy general name' ),
        'singular_name'       => _x( 'SlideShow', 'taxonomy singular name' ),
        'search_items'        => __( 'Search Genres' ),
        'all_items'           => __( 'All SlideShows' ),
        'parent_item'         => __( 'Parent SlideShow' ),
        'parent_item_colon'   => __( 'Parent SlideShow:' ),
        'edit_item'           => __( 'Edit SlideShow' ), 
        'update_item'         => __( 'Update SlideShow' ),
        'add_new_item'        => __( 'Add New SlideShow' ),
        'new_item_name'       => __( 'New SlideShow Name' ),
        'menu_name'           => __( 'Slide Show' )
    );    

    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'slideshow' )
    );
    register_taxonomy( 'slideshow', array( 'slider' ), $args );
}

add_action( 'init', 'wms_create_opinion_taxonomies', 0 );
//create SlideShow Category for the post type "slider"
function wms_create_opinion_taxonomies() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'                => _x( 'OpinionShows', 'taxonomy general name' ),
        'singular_name'       => _x( 'OpinionShow', 'taxonomy singular name' ),
        'search_items'        => __( 'Search Genres' ),
        'all_items'           => __( 'All OpinionShows' ),
        'parent_item'         => __( 'Parent OpinionShow' ),
        'parent_item_colon'   => __( 'Parent OpinionShow:' ),
        'edit_item'           => __( 'Edit OpinionShow' ), 
        'update_item'         => __( 'Update OpinionShow' ),
        'add_new_item'        => __( 'Add New OpinionShow' ),
        'new_item_name'       => __( 'New OpinionShow Name' ),
        'menu_name'           => __( 'Opinion Show' )
    );    

    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'opinionshow' )
    );
    register_taxonomy( 'opinionshow', array( 'opinion' ), $args );
}

add_action( 'init', 'wms_create_customer_taxonomies', 0 );
//create SlideShow Category for the post type "slider"
function wms_create_customer_taxonomies() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'                => _x( 'CustomerShows', 'taxonomy general name' ),
        'singular_name'       => _x( 'CustomerShow', 'taxonomy singular name' ),
        'search_items'        => __( 'Search Genres' ),
        'all_items'           => __( 'All CustomerShows' ),
        'parent_item'         => __( 'Parent CustomerShow' ),
        'parent_item_colon'   => __( 'Parent CustomerShow:' ),
        'edit_item'           => __( 'Edit CustomerShow' ), 
        'update_item'         => __( 'Update CustomerShow' ),
        'add_new_item'        => __( 'Add New CustomerShow' ),
        'new_item_name'       => __( 'New CustomerShow Name' ),
        'menu_name'           => __( 'Customer Show' )
    );    

    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'customershow' )
    );
    register_taxonomy( 'customershow', array( 'customer' ), $args );
}

add_action( 'init', 'wms_create_teams_taxonomies', 0 );


function custom_excerpt_length(){
        return 15;

}
add_filter('excerpt_length', 'custom_excerpt_length');
//create SlideShow Category for the post type "slider"
function wms_create_teams_taxonomies() {

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'                => _x( 'TeamShows', 'taxonomy general name' ),
        'singular_name'       => _x( 'TeamShow', 'taxonomy singular name' ),
        'search_items'        => __( 'Search Genres' ),
        'all_items'           => __( 'All TeamShows' ),
        'parent_item'         => __( 'Parent TeamShow' ),
        'parent_item_colon'   => __( 'Parent TeamShow:' ),
        'edit_item'           => __( 'Edit TeamShow' ), 
        'update_item'         => __( 'Update TeamShow' ),
        'add_new_item'        => __( 'Add New TeamShow' ),
        'new_item_name'       => __( 'New TeamShow Name' ),
        'menu_name'           => __( 'Team Show' )
    );    

    $args = array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'Teamshow' )
    );
    register_taxonomy( 'Teamshow', array( 'team' ), $args );
}



?>