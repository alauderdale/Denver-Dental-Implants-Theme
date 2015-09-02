<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package boiler
 */

get_header(); ?>

<?php $bannerLoop = new WP_Query( array( 'orderby' => 'rand', 'showposts' => 1, 'post_type' => 'page_banner') );
while ( $bannerLoop->have_posts() ) : $bannerLoop->the_post(); ?>


<section class='invert-section hero bg-cover' style='background-image:url(<?php the_field('banner_image'); ?>);'>

<?php endwhile;?>
<?php wp_reset_postdata(); ?>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12 text-center'>
        <h1>
        Page Not Found
        </h1>
      </div>
    </div>
  </div>
</section>

	<section>
	  <div class='container'>
		  <div class="row">
		    <div class='col-md-12 text-center'>
		    	<a href="<?php bloginfo('url')?>" class="btn btn-primary btn-primary">
		      		Take me home
		      	</a>
		    </div>
		  </div>
	  </div>
	</section>



<?php get_footer(); ?>