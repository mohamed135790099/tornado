<?php
    /**
     * this template for displaying category, tag, taxonomy, author, or date
     * @package Tornado Wordpress
    */
?>


<?php get_header(); ?>
        <!-- loading -->
        <div class='tornado-loader loading8'>
            <div class='loader24'>
                <div class='square'></div>
                <div class='square'></div>
                <div class='square last'></div>
                <div class='square clea'></div>
                <div class='square'></div>
                <div class='square last'></div>
                <div class='square clea'></div>
                <div class='square '></div>
                <div class='square last'></div>
            </div>
        </div>
         <?php  get_search_form();?>
        <?php get_template_part('.\inc\functions\components\header')?>
        
        <?php get_template_part('.\inc\functions\components\plog-post')?> 
        <?php get_template_part('.\inc\functions\components\service-post')?> 
        <!-- Features -->
        <?php get_template_part('.\inc\functions\components\advantage-post')?> 
     
        </div>
        <!-- // Banner -->   
 <?php get_footer();?>