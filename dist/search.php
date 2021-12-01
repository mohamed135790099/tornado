<?php
	/**
	 * this template for displaying Search Resault
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
	<?php
		
		$term = $_GET['s'];

		$expTerm = explode(" ",$term);

		$search = "(";
		foreach($expTerm as $ek=>$ev)
		{
			if($ek == 0)
			{
				$search .= " post_title LIKE '%".$ev."%' ";
			}
			else
			{
				$search .= " OR post_title LIKE '%".$ev."%'";
			}
		}
		$search .= ")";

		$query = $wpdb->get_results(" SELECT * FROM ".$wpdb->prefix."posts WHERE post_status='publish' AND $search ");

		/* build a position array for the term */
		$position = 101;
		$rate = [];
		
		for($i=0; $i<=100; $i++)
		{
			$position = $position - 1; // first run will equal 100
			$rate[$i] = $position;
		}

		/* build the array based on type and position */
		/* loop through the query */
		$newArray = [];
		foreach($query as $k=>$v)
		{
			$title = $v->post_title;
			/* loop though each term */
			$calculate = 0;
			foreach($expTerm as $tk=>$tv)
			{
				if(strpos(strtolower($title), strtolower($tv)) !== false)
				{
					$calculate = $calculate + strlen($tv);

					$pos = strpos(strtolower($title), strtolower($tv));
					$calculate = $calculate + $rate[$pos];

				} // end of if statement
			} // end of the for each term

			$newKey = $calculate.'.'.$v->ID;

			$newArray[$newKey] = $v;

			//print $newKey.'<br />';

		} // end of for each result or query
		/* sort in reverse DESC */
		krsort($newArray);
		if ($newArray==true){
	            echo '<div class="alert"><b>"'. __('Search Resault for ','tornado') . $s .'"</b></div>';
			foreach($newArray as $qk=>$qv)
		{
			$link = get_permalink($qv->ID);
			
			?>
			<div class="col-12 col-m-6 col-l-4 blog-block">
			<div class="content-box">

			<!-- Image --><?php if (has_post_thumbnail( $qv->ID) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $qv->ID ), 'single-post-thumbnail' ); ?>
			<a href="<?php echo $link; ?>" class="image" data-src="<?php echo $image[0];?>"></a>
				<?php endif;?>   
				<!-- Content -->
				<a href="<?php echo $link; ?>"><h3><?php echo $qv->post_title; ?></h3></a>
				<p><?php echo strip_tags(get_the_excerpt($qv->ID)); ?></p>
				<!-- Button -->
				<a href="<?php echo $link;?>" class="btn small secondary"></a>
			</div>
			</div>


			<?php	
		}
		
		?>
		<!-- Banner -->
				<div class="banner-sec">
				<div class="container">
					<?php echo get_option('banner_code');?>
				</div>
			    </div>
		<!-- // Banner -->
		<?php	

		}
		else{
			?>
			 <!-- Header -->
      
        <div class="page-head">
            <div class="container">التدوينة</div>
        </div>
        <!-- // page head -->
        <div class="error404page">
            <img src="<?php echo get_template_directory_uri(); ?>/img/404.png"  alt="error-404">
            <h2><div class="alert danger"><b><?php echo __('No results found for ','tornado') . $s . __('Try Another Keywords ','tornado'); ?>"</b></div></h2>
            <a href="http://localhost:8090/wordpress/%d8%a7%d9%84%d8%b1%d8%a6%d9%8a%d8%b3%d9%8a%d9%87/" class="btn primary round-corner">العودة للرئيسية</a>
        </div>
        <!-- Banner -->
        <div class="banner-sec">
            <div class="container">
                       <?php echo get_option('banner_code');?>
                  </div>
        </div>
        <!-- // Banner -->
	<?php

		}
		


	 ?>
	
        

<!-- // Page Content -->
     
       
        <!-- // Banner -->   
 <?php get_footer();?>