<?php
/*
Template Name: Smile Gallery
 */
?>

<?php get_header(); ?>


<?php get_template_part( 'content', 'page_header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>


<section class='no-padding-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <h5>
          Filters
        </h5>
        <ul class='filter-nav list-inline'>
					<li>
						<a class="filter-button" href="#" id="all" onclick="return false;">
							All
						</a>
					</li>

        <?php

					 $terms = get_terms( 'smile_type' );
					 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){

					     foreach ( $terms as $term ) {
					       echo '	          <li><a class="filter-button" href="#" id="'. $term->slug  .'" onclick="return false;">'. $term->name  .'</a></li>';
					        
					     }
					 }

				?>



        </ul>
      </div>
    </div>
  </div>
</section>
<section class='no-padding-top'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='masonry-grid'>
          <div class='grid-sizer'></div>
          <div class='gutter-sizer'></div>
					<?php $imagesLoop = new WP_Query( array('post_type' => 'gallery', 'posts_per_page' => -1, 'orderby'=>'menu_order', order=>'ASC') ); ?>

						<?php while ( $imagesLoop->have_posts() ) : $imagesLoop->the_post(); 

						$image_loop = intval(get_post_meta($post->ID, 'Photo', true));

					?>

	          <div class='grid-item 

						<?php $slugs = wp_get_post_terms($post->ID,'smile_type');
						 $count = count($slugs);
						 if ( $count > 0 ){
						     foreach ( $slugs as $slug ) {
						       echo  $slug->slug.' ' ;
								 }
						}?>

	          all'>
	            <a class='fancybox-image' href='<?php echo wp_get_attachment_url( $image_loop ); ?>' rel='item1-gallery'>
	              <img class='full-width' src='<?php echo wp_get_attachment_url( $image_loop ); ?>'>
	            </a>
	          </div>
          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php endwhile; // end of the loop. ?>
	
<?php get_template_part( 'content', 'appt_banner' ); ?>


<?php get_footer(); ?>
