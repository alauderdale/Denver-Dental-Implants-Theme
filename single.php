<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>


<?php $pageTitle = 'Blog' ?>

<?php  set_query_var( 'pageTitle' , $pageTitle );
        get_template_part( 'content', 'page_header' ); 
?>

<section class='blog blog-single'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='row'>
          <div class='col-md-10'>
						<?php while ( have_posts() ) : the_post(); ?>
            <h2 class='heading-bordered heading-bordered-left'>
              <?php the_title();?>
            </h2>
							<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
          </div>
          <div class='col-md-2'></div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>