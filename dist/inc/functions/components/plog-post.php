<?php $terms_id = get_queried_object_id();?>
<?php $paged =get_query_var('paged')?get_query_var('paged'):1;?>

<?php 
$ar = array(
        'post_type' => 'blog',
        'order' => 'DESC',
        'posts_per_page' => 4,
        'tax_query' => array(
                        array(
                            'taxonomy' => 'blogshow',
                            'field' => 'id',
                            'terms' => 'terms_id',
                        )
                    ),
        'paged' => $paged,

);
 $query = new WP_Query($ar);
?>          
<div class="container page-content">
 <div class="row overflow">   
                     <!-- news block -->
                <?php if (  $query  ->have_posts()): ?> 
                <?php // While we have posts, output them as <li>'s
                while (  $query ->have_posts() ) : $query ->the_post(); ?> 
                <div class="col-12 col-m-4 col-l-3 news-block wow fadeInStart">
                    <div class="content-box">
                        <a href="#" class="image" data-src="<?php if(has_post_thumbnail()){the_post_thumbnail_url( );}?>"></a>
                        <a href="<?php the_permalink()?>"><h3><?php the_title(); ?></h3></a>
                        <p><?php echo strip_tags(get_the_excerpt()); ?></p>
                        <span class="ti-clock"><?php echo get_the_date('d M Y');?></span>
                        <a href="<?php the_permalink()?>" class="more">قراءة المزيد</a>
                    </div>
                </div>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
    <!-- ENTER HTML IF THERE'S NO SLIDES HERE -->
    <?php endif; ?>
  </div>
  <!-- Pagination -->
    <ul class="pagination separate">
      <?php // global $query;
        //if (function_exists("pagination")) { pagination($query); };
            //wp_reset_postdata();?>
    </ul>
   
       <ul class="pagination separate">
                <li><a href="#" class="ti-arrow-right-c"></a></li>
                <li class="active"><a href="http://localhost:8090/wordpress/plog/page/1/">01</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/2/">02</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/3/">03</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/4/">04</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/5/">05</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/6/">06</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/7/">07</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/8/">08</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/9/">09</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/10/">10</a></li>
                <li><a href="http://localhost:8090/wordpress/plog/page/11/">11</a></li>
                <li><a href="#" class="ti-arrow-left-c"></a></li>
                  
            </ul>

</div>

 
 