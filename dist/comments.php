<?php
    /**
     * this template reprsent the Comments
     * @package Tornado Wordpress
    */
?>

<?php // Security Call
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
    //===== if there's a password =====//
	if (!empty($post->post_password)) {
        //===== and it doesn't match the cookie =====//
        if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
            echo '<div class="alert danger">' . __( 'هذه المقالة محمية بكلمة مرور: الرجاء إدخال كلمة لفتح التعليقات','tornado' ) . '</div>';
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddClass = 'comment-odd';
    $evenClass = 'comment-even';
    

?>
<?php if ($comments) :foreach ($comments as $comment):
    $commentID= (int)(get_comment_ID());
    if($commentID % 2== 0){
        ?>
        <!-- Comment Block -->
        <div class="commentblock <?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
            <?php if ($comment->comment_approved == '0') : ?>
            <p class="danger-color"><?php echo __('يرجى الانتظار حتى تتم الموافقة على تعليقك.','tornado'); ?></p>
            <?php endif; ?>
            <!-- Comment Content -->
            <!-- Comment -->
        <div class="table-style comment-block">
            <i><img src="https://via.placeholder.com/150x150" alt=""></i>
            <div class="info">
                <p>
                    <?php comment_text(); ?>
                </p>
        <span class="ti-person-io"><?php comment_author_link() ?></span>
    </div>
</div>

</div>
        <?php
    }
    else{
             ?>
        <!-- Comment Block -->
        <div class="commentblock <?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
            <?php if ($comment->comment_approved == '0') : ?>
            <p class="danger-color"><?php echo __('يرجى الانتظار حتى تتم الموافقة على تعليقك.','tornado'); ?></p>
            <?php endif; ?>
            <!-- Comment Content -->
            <!-- Comment -->
        <div class="table-style comment-block sub-comment">
            <i><img src="https://via.placeholder.com/150x150" alt=""></i>
            <div class="info">
                <p>
                    <?php comment_text(); ?>
                </p>
        <span class="ti-person-io"><?php comment_author_link() ?></span>
    </div>
</div>

</div>
        <?php
    }
    ?>



<?php //===== Event Comment Class ======//
    $oddClass = ( empty( $oddClass ) ) ? 'comment-even' : '';
    ?>
    <?php
    /*===== End Loop =====*/
    endforeach; 
//====== if No Comments ======//
else : 
    //===== If comments are open, but there are no comments =====//
    if ('open' == $post->comment_status) :
    echo '<div class="alert danger">' . __( 'لا توجد تعليقات حتى الآن.','tornado' ) . '</div>';
    endif;
endif; 

?>

<!-- Comments Form -->
<?php if ('open' == $post->comment_status) : ?>
<div class="primary-block">
    <!-- Title -->
    <h3 class="head ti-comment-bubble"><?php echo __('اضافة تعليق','tornado'); ?></h3>
    <!-- Form -->
    <?php /*====== if Need Login =====*/ if ( get_option('comment_registration') && !$user_ID ) : ?>
    <div class="alert danger"><?php echo __( 'يجب عليك تسجيل الدخول لنشر التعليقات','tornado' ); ?>
        <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><b><?php echo __('Login','tornado'); ?></b></a>
    </div>
    <?php else : /*====== if no Need for Login =====*/ ?>
    <form class="form-ui comment-form row" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

      <!-- Comments Form -->
            <div class="news-post">
                <div class="post-head"><?php echo __('اضافة تعليق','tornado'); ?></div>
                <div class="alert danger"><?php echo __( 'يجب عليك تسجيل الدخول لنشر التعليقات','tornado' ); ?>
                    <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>"><b><?php echo __('Login','tornado'); ?></b></a>
                </div>
                <form class="form-ui comment-form row" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                    <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="col-12">
                        <div class="alert"><b><?php echo __('انت حاليا مسجل الدخول باعتبارك ') . $user_identity; ?></b></div>
                   </div>
                 <?php else : ?>
                <form class="form-ui clear-after">
                    <div class="col-s-12 col-m-8">
                        <input type="text" name="author" value="<?php echo $comment_author; ?>" placeholder="<?php echo __('الاسم كامل','tornado'); ?>" tabindex="1" <?php if ($req) echo "required"; ?> class="round-corner">
                        <input type="email" name="email" value="<?php echo $comment_author_email; ?>" placeholder="<?php echo __('البريد الالكتروني','tornado'); ?>" tabindex="2" <?php if ($req) echo "required"; ?> class="round-corner">
                    </div>
                     <textarea name="comment" placeholder="<?php echo __('اترك هنا تعليق','tornado'); ?>" class="round-corner"></textarea>
                    <input name="submit" type="submit" tabindex="5" value="<?php echo __('ارسال تعليق','tornado'); ?>" class="btn primary left round-corner"/>
                    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
                    <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
                    <?php do_action('comment_form', $post->ID); ?>
                </form>
            </div>
        </div>
        <?php endif;?>

        <!-- // Page Content -->
    <!-- // Form -->
    <?php endif; //====== end if Need Login =====// ?>
</div>
<?php endif; //=== end if Comments Open End ====// ?>
