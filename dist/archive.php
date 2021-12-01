<?php
    /**
     * Template Name: Blog
     * this template for displaying category, tag, taxonomy, author, or date
     * @package Tornado Wordpress
    */
?>

<!-- Head Tag -->
<?php get_header(); ?>
<!-- Header -->

<?php get_template_part('.\inc\functions\components\header')?>

<!-- Page Content -->
<div class="container-xl page-content">
    <!-- Grid -->
    <?php 
        //==== Query Dynamic Options ====//
        global $wp_query;
        /*==== Grap Query Data =====*/
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 12,
            'paged' => $paged,
            'order' => 'DESC',
        );
        $the_query = new WP_Query( $args );
        //==== Start Query =====//
        if ($the_query->have_posts() ) :
            $posts_counter = 0; 
            echo '<div class="row">';
            //==== Loop Start ====//
            while ($the_query->have_posts() ): $the_query->the_post();
            //====== Wrap Each 4 Posts in Grid =====//
            //=== Block  Design ===//
                get_template_part('inc/functions/blocks/blog','block');  
            //==== End Loop =====//
            endwhile;
            echo '</div>';
            //=== Pagination ===//
            if (function_exists("pagination")) { pagination($the_query); };
            wp_reset_postdata();
            //==== if have no Posts ====//
        else : echo '<div class="alert info">' . __( 'Sorry no Posts have been found here.' ) . '</div>';
        //==== End Query =====//
        endif;
    ?>
    <!-- // Grid -->
</div>
<!-- // Page Content -->

<!-- Custom Footer --> 
<!-- Footer -->
<?php get_footer(); ?> 