<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package boiler
 */

get_header(); ?>






<section class='invert-section hero bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/blog_banner.png);'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <h1>
          blog
        </h1>
      </div>
    </div>
  </div>
</section>
<section class='blog blog-index'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
      	<?php 
					$temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(array( 'post_type' => 'post')); $wp_query->query('showposts=10' . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post(); 
				?>
	        <div class='post-thumb'>
	          <div class='row padding-top'>
	            <div class='col-md-8'>
	              <h4>
	                <a href='<?php the_permalink(); ?>'>
	                  <?php the_title(); ?>
	                </a>
	              </h4>
	              <h6 class='extra-light-text-color'>
	                posted on <?php the_date(); ?>
	              </h6>
	              <p class='lead'>
	                <?php the_excerpt();?>
	              </p>
	              <a class='btn btn-primary margin-bottom' href='<?php the_permalink(); ?>'>
	                READ MORE
	              </a>
	            </div>
	            <div class='col-md-1'></div>
	            <div class='col-md-3'>
	              <a href='blog/single'>
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<a href='<?php the_permalink();?>'>
										<img 
										class='img-responsive margin-bottom margin-top' 
										src='<?php echo $image[0]; ?>' 
										width='169'>
									</a>
								<?php endif; ?>
	              </a>
	            </div>
	          </div>
	          <hr>
	        </div>
				<?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
				  <?php if ($paged > 1) { ?>
          <nav>
            <ul class='pager'>
              <li>
              	<?php next_posts_link('&laquo; Older'); ?>
              </li>
              <li>
                <?php previous_posts_link('Newer &raquo;'); ?>
              </li>
            </ul>
          </nav>

					<?php } else { ?>

          <nav>
            <ul class='pager'>
              <li>
              	<?php next_posts_link('&laquo; Older'); ?>
              </li>
            </ul>
          </nav>

					<?php } ?>

					<?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>






<?php get_footer(); ?>