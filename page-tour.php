<?php
/*
Template Name: Office Tour
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'content', 'page_header' ); ?>

<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='masonry-grid'>
          <div class='grid-sizer'></div>
          <div class='gutter-sizer'></div>

					<?php
					$loop = new WP_Query( array( 'post_type' => 'tours', 'posts_per_page' => -1, 'orderby'=>'menu_order', order=>'ASC') );
					while ( $loop->have_posts() ) : $loop->the_post();
					$image_loop = intval(get_post_meta($post->ID, 'Photo', true)); 

					echo "           <div class='grid-item'> <a class='fancybox-image' href='".wp_get_attachment_url($image_loop)."' rel='office-gallery'>
					<img class='full-width' src='".wp_get_attachment_url($image_loop)."'>
					</a></div>";


					endwhile;

					?>

        </div>
      </div>
    </div>
  </div>
</section>
	
<?php get_template_part( 'content', 'appt_banner' ); ?>


<?php get_footer(); ?>