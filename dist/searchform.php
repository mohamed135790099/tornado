
<?php
    /**
     * this template for displaying Search Form
     * @package Tornado Wordpress
    */
?>
   
<!-- Search Box -->
        <div class="modal-box tornado-ui" id="search-box">
            <div class="modal-content">
                <div class="modal-head">
                  <h3 class="head ti-search"><?php echo __('Quick Search','tornado'); ?></h3>
                    <span class="close-modal ti-close"></span>
                </div>
                <form class="form-ui modal-body" mothod="get" action="<?php echo home_url('/');?>"> 
                    <input type="text" placeholder="<?php echo get_search_query();?>" name="s" value="<?php if(isset($_GET['s'])){print $_GET['s'];} ?>" id="search-input">
                    <input type="submit" value="search" class="btn primary round-corner">
                </form>
            </div>
        </div>