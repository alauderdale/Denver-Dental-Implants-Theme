<?php
/*
Template Name: Testimonials
 */
?>

<?php get_header(); ?>


<?php get_template_part( 'content', 'page_header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='masonry-grid testimonial-grid'>
          <div class='grid-sizer'></div>
          <div class='gutter-sizer'></div>

					<?php $testimonialLoop = new WP_Query( array('post_type' => 'testimonials', 'posts_per_page' => -1,  'orderby'=>'rand') ); ?>

						<?php while ( $testimonialLoop->have_posts() ) : $testimonialLoop->the_post(); 

						$name = (get_post_meta($post->ID, 'Name', true));

					?>

	          <div class='grid-item testimonial'>
	            <h2 class='dark-text-color'>
	              <?php the_title();?>
	            </h2>
	            <blockquote>
	              <?php the_content();?>
	            </blockquote>
	            <footer>
	              -
	              <?php echo $name ?>
	            </footer>
	          </div>

          <?php endwhile; // end of the loop. ?>


        </div>
      </div>
    </div>
  </div>
</section>


<?php endwhile; // end of the loop. ?>
	


<?php get_footer(); ?>