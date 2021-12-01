
 <?php $terms_id = get_queried_object_id();?>
 <?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
          <!-- Footer -->
        <footer class="main-footer">
            <div class="container footer-box">
                <div class="about-fo">
                    <h2>من نحن</h2>
                    <p><?php echo get_option('footer_code');?></p>
                </div>
                
                <div class="links-fo">
                    <h2>روابط هامه</h2>
                    <ul>
                               <?php echo wp_nav_menu(array(
                                'menu' => 'sidebar-menu',
                                'theme_location' => 'sidebar-menu',
                                'container' => false,
                                'container_class' => false,
                            ));?>
                           
                       
                    </ul>
                </div>
                
                <div class="links-fo">
                    <h2>اقسام الموقع</h2>
                    <ul>
                        
                      <?php  $categories = get_terms( array('category'), get_categories( array(
                               'post_type' => 'post',
                                'orderby' => 'name',
                                'order' => 'DESC',
                                'taxonomy' => array('category'),
                                'field' => 'id',
                                'terms' => 'terms_id',
                            ) )
                          );
                                                   
                            foreach( $categories as $category ) {
                                $category_link = sprintf( 
                                    '<li><a href="%1$s" alt="%2$s">%3$s</a></li>',
                                    esc_url( get_category_link( $category->term_id ) ),
                                    esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                                    esc_html( $category->name )
                                );
                                
                                echo  sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) ;
                            } 
                            ?>       
                    </ul>
                </div>
                
                <div class="contact-fo">
                    <h2>تواصل معنا</h2>
                    <ul class="ui-tornado" data-type="custome">
                        <li class="ti-phone"><?php echo get_option('phone_number');?></li>
                        <li class="ti-email"><?php echo get_option('contact_email');?></li>
                        <li class="ti-phone"><?php echo get_option('phone_number_2nd');?></li>
                        <li class="ti-email"><?php echo get_option('contact_email_2nd');?></li>
                    </ul>
                    <div class="social">
                        <a href="<?php echo get_option('facebook_url');?>" class="ti-facebook"></a>
                        <a href="<?php echo get_option('twitter_url');?>" class="ti-twitter"></a>
                        <a href="<?php echo get_option('dribbble_url');?>" class="ti-dribbble"></a>
                        <a href="<?php echo get_option('linkedin_url');?>" class="ti-linkedin"></a>
                    </div>
                </div>
            </div>
            
            <!-- copyrights -->
            <div class="copyrights">
                <div class="container">
                    <span><?php echo __(get_option('meta_copyrights'),'tornado'); ?> </span>
                    <a href="https://www.webfx.com/blog/web-design/google-font-api-guide/" class="mahacode"><img src="<?php echo get_template_directory_uri(); ?>/img/mahacode-black.png" alt=""></a>
                </div>
            </div>
            <!-- copyrights -->
        </footer>
      <?php wp_footer();?>
    </body>
</html>
