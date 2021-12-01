<?php 

   //======= Exit if Try to Access Directly =======//
   defined('ABSPATH') || exit;


    //==== Assets Register ====//
    include( dirname(__FILE__) . '\inc\functions\theme-assets.php' );
    require_once('C:\xampp\htdocs\wordpress\wp-content\themes\wp_heiash_v1\dist\inc\customizer.php');
        //==== Theme Initials ====//
    include( dirname(__FILE__) . '\inc\functions\init.php' );
    include( dirname(__FILE__) . '\inc\functions\default-settings.php' );
    //==== Setting Page ====//
    include( dirname(__FILE__) . '\inc\functions\admin.php' );    
    require_once('C:\xampp\htdocs\wordpress\wp-content\themes\wp_heiash_v1\dist\inc\functions\default-settings.php');
    

    //==== Preformance Speed Cleanup ====//
    include( dirname(__FILE__) . '\inc\functions\preformance.php' );
        //==== include custom post ====//
    include( dirname(__FILE__) . '\inc\functions\custom-post-types.php' );    



    //===== Register Widgets Area =====//
    function tornado_widgets_init() {
        //======== Blog Sidebar Widget ==========//
        register_sidebar(
            array(
                'name'          => esc_html__('Blog Sidebar', 'tornado'),
                'id'            => 'blog-sidebar',
                'description'   => esc_html__( 'Add widgets here.', 'tornado' ),
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => '',
            )
        );
    }

    add_action( 'widgets_init', 'tornado_widgets_init' );


    //to add menus to theme wordpress
function fn_nav_menu(){
        register_nav_menus(array(
                'primary-menu' => __('Primary Menu', 'text_domain'),
                'footer-menu ' => __('Footer Menu', 'text_domain'),

        ));
}
add_action('init', 'fn_nav_menu'); 

 //to add menus to theme wordpress
function fn_theme_supports(){
        //to put new title for website
        add_theme_support('title-tag');
        //to put  featured image
        add_theme_support('post-thumbnails');
        add_theme_support('html5',array('search-form'));
        add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'fn_theme_supports');


function social_media_icons( $contactmethods ) {
    // Add social media
    $contactmethods['twitter'] = 'Twitter';
    $contactmethods['facebook'] = 'Facebook';
    $contactmethods['gplus'] = 'Google Plus';
    $contactmethods['linkedin'] = 'Linkedin';

    return $contactmethods;
}
add_filter('user_contactmethods','social_media_icons',10,1);



// Define additional "post thumbnails". Relies on MultiPostThumbnails to work
    //==== Stop Generating Image Sizes ====//
    function add_image_insert_override($sizes){
        unset( $sizes['thumbnail']);
        unset( $sizes['medium']);
        unset( $sizes['large']);
        return $sizes;
    }

    add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );
  /*======= Pagination ========*/
    function pagination($query) {
 
        $prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
        $total   = isset( $query->max_num_pages ) ? $query->max_num_pages : 11;
        $pages = paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( '1', get_query_var( 'paged' ) ),
            'format'       => '?page=%#%',
            'show_all'     => false,
            'type'         => 'array',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i class="ti-arrow-right-c"></i>' ),
            'next_text'    => sprintf( '<i class="ti-arrow-left-c"></i>'),
          
        ));
        if( is_array( $pages ) ) {
             echo"<ul class='pagination separate tx-align-center'>";
              
            foreach ( $pages as $page ) {
                if (strpos($page, 'current') !== false) {
                    $page = str_replace("span", "a", $page);
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                
                }
            }
              echo '</ul>';
        }
    }

    //init the meta box
add_action( 'after_setup_theme', 'custom_postimage_setup' );
function custom_postimage_setup(){
    add_action( 'add_meta_boxes', 'custom_postimage_meta_box' );
    add_action( 'save_post', 'custom_postimage_meta_box_save' );
}

function custom_postimage_meta_box(){

    //on which post types should the box appear?
    $post_types = array('post','page','blog','advantage','service');
    foreach($post_types as $pt){
        add_meta_box('custom_postimage_meta_box',__( 'Featured Images for single page', 'yourdomain'),'custom_postimage_meta_box_func',$pt,'side','low');
    }
}

function custom_postimage_meta_box_func($post){

    //an array with all the images (ba meta key). The same array has to be in custom_postimage_meta_box_save($post_id) as well.
    $meta_keys = array('second_featured_image');

    foreach($meta_keys as $meta_key){
        $image_meta_val=get_post_meta( $post->ID, $meta_key, true);
        ?>
        <div class="custom_postimage_wrapper" id="<?php echo $meta_key; ?>_wrapper" style="margin-bottom:20px;">
            <img src="<?php echo ($image_meta_val!=''?wp_get_attachment_image_src( $image_meta_val)[0]:''); ?>" style="width:100%;display: <?php echo ($image_meta_val!=''?'block':'none'); ?>" alt="">
            <a class="addimage button" onclick="custom_postimage_add_image('<?php echo $meta_key; ?>');"><?php _e('set featured image ','yourdomain'); ?></a><br>
            <a class="removeimage" style="color:#a00;cursor:pointer;display: <?php echo ($image_meta_val!=''?'block':'none'); ?>" onclick="custom_postimage_remove_image('<?php echo $meta_key; ?>');"><?php _e('remove feature image ','yourdomain'); ?></a>
            <input type="hidden" name="<?php echo $meta_key; ?>" id="<?php echo $meta_key; ?>" value="<?php echo $image_meta_val; ?>" />
        </div>
    <?php } ?>
    <script>
    function custom_postimage_add_image(key){

        var $wrapper = jQuery('#'+key+'_wrapper');

        custom_postimage_uploader = wp.media.frames.file_frame = wp.media({
            title: '<?php _e('select image','yourdomain'); ?>',
            button: {
                text: '<?php _e('select image','yourdomain'); ?>'
            },
            multiple: false
        });
        custom_postimage_uploader.on('select', function() {

            var attachment = custom_postimage_uploader.state().get('selection').first().toJSON();
            var img_url = attachment['url'];
            var img_id = attachment['id'];
            $wrapper.find('input#'+key).val(img_id);
            $wrapper.find('img').attr('src',img_url);
            $wrapper.find('img').show();
            $wrapper.find('a.removeimage').show();
        });
        custom_postimage_uploader.on('open', function(){
            var selection = custom_postimage_uploader.state().get('selection');
            var selected = $wrapper.find('input#'+key).val();
            if(selected){
                selection.add(wp.media.attachment(selected));
            }
        });
        custom_postimage_uploader.open();
        return false;
    }

    function custom_postimage_remove_image(key){
        var $wrapper = jQuery('#'+key+'_wrapper');
        $wrapper.find('input#'+key).val('');
        $wrapper.find('img').hide();
        $wrapper.find('a.removeimage').hide();
        return false;
    }
    </script>
    <?php
    wp_nonce_field( 'custom_postimage_meta_box', 'custom_postimage_meta_box_nonce' );
}

function custom_postimage_meta_box_save($post_id){

    if ( ! current_user_can( 'edit_posts', $post_id ) ){ return 'not permitted'; }

    if (isset( $_POST['custom_postimage_meta_box_nonce'] ) && wp_verify_nonce($_POST['custom_postimage_meta_box_nonce'],'custom_postimage_meta_box' )){

        //same array as in custom_postimage_meta_box_func($post)
        $meta_keys = array('second_featured_image','third_featured_image');
        foreach($meta_keys as $meta_key){
            if(isset($_POST[$meta_key]) && intval($_POST[$meta_key])!=''){
                update_post_meta( $post_id, $meta_key, intval($_POST[$meta_key]));
            }else{
                update_post_meta( $post_id, $meta_key, '');
            }
        }
    }
}

function template_chooser($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'blog' )
  {
    return locate_template('archive-blog.php');
  }
  return $template;
}
add_filter('template_include', 'template_chooser');


 //====== Allow Blank Searchs ========//
    function SearchFilter($query) {
        // If 's' request variable is set but empty
        if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){
            $query->is_search = true;
            $query->is_home = false;
        }
        return $query;
    }

    add_filter('pre_get_posts','SearchFilter');



add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
function my_acf_google_map_api( $args ) {
    $args['key'] = 'AIzaSyDH3TLPz7ysY1jzzfr25a4Cz6MIAip4YZw';
    return $args;
}

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDH3TLPz7ysY1jzzfr25a4Cz6MIAip4YZw');
}
add_action('acf/init', 'my_acf_init')





?>
