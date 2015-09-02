<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

    </div>
    <!-- end main content -->
    <footer class='global-footer'>
      <section>
        <div class='container'>
          <div class='row'>
            <div class='col-md-2 col-sm-1'></div>
            <div class='col-md-8 col-sm-10'>
              <div class='row'>
                <div class='col-sm-2'></div>
                <div class='col-sm-3 margin-bottom text-center-sm'>
                  <h5>
                    COMPANY
                  </h5>
									<?php wp_nav_menu( array( 
									'theme_location' => 'primary-company', 
									'container' => false, 
									'menu_class' => 'footer-links list-unstyled',
									'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
									)); ?>
                </div>
                <div class='col-sm-3 margin-bottom text-center-sm'>
                  <h5>
                    Patients
                  </h5>
									<?php wp_nav_menu( array( 
									'theme_location' => 'primary-patients', 
									'container' => false, 
									'menu_class' => 'footer-links list-unstyled',
									'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
									)); ?>
                </div>
                <div class='col-sm-3 margin-bottom text-center-sm'>
                  <h5>
                    Be Social
                  </h5>
                  <ul class='footer-links list-unstyled'>
                  	<li>
                      <ul class='list-inline menu-social'>
									  		<?php
													$loop = new WP_Query( array( 'post_type' => 'social', 'posts_per_page' => -1, 'orderby'=>'meta_value','meta_key'=> 'Order', order=>'ASC' ) );
													$order = get_post_meta($post->ID, 'Order Of Display - Number', true);
												
													while ( $loop->have_posts() ) : $loop->the_post();
														$target = '_blank';
														$socialimg = get_post_meta($post->ID, 'Social Network Image', true);
														$sociallink = get_post_meta($post->ID, 'Social Network Link', true);
														$socialenabled = get_post_meta($post->ID, 'Social Network Enabled', true);
														$menuclass = get_post_meta($post->ID, 'Menu class', true);
														if($post->post_title == 'Blog Feed') $target = '_self';
														if ($socialenabled == "Enabled"){ ?>


                            <li>
                              <a style="color:<?php the_field("icon_color") ?> ; " target="_blank" href="<?php echo $sociallink ?>">
                                <i class="fa <?php echo $menuclass ?> ">
                                </i>
                              </a>
                            </li>

                            <?php
														}
                            ?>


													<?php endwhile; 
  													// Reset Post Data
  													wp_reset_postdata();
												  ?>
											</ul>
										</li>
	                </ul>
                </div>
                <div class='col-sm-1'></div>
              </div>
              <div class='row'>
                <div class='col-lg-12'>
                  <hr>
                </div>
              </div>
              <div class='ro1'>
                <div class='col-lg-12'>
                  <p class='text-center margin-top'>
                    Dental Elements | 1781 15th Street, Denver, CO 80202
                    <br>
                    303-309-4093
                    |
                    <a href='mailto:smile@dentalelements.com'>
                      smile@dentalelements.com
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class='col-md-2 col-sm-1'></div>
          </div>
        </div>
      </section>
    </footer>
		</div>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/classie.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/nav.js" type="text/javascript"></script>
  </body>
</html>




<?php wp_footer(); ?>

</body>
</html>
