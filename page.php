<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package boiler
 */

get_header(); ?>

<?php get_template_part( 'content', 'page_header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>



	<section>
	  <div class='container'>
		  <div class="row">
		    <div class='col-md-8'>
		      <?php the_content();?>
		    </div>
		    <div class='col-md-4'>
		    </div>
		  </div>
	  </div>
	</section>


<?php endwhile; // end of the loop. ?>
	
<?php get_template_part( 'content', 'appt_banner' ); ?>


<?php get_footer(); ?>
