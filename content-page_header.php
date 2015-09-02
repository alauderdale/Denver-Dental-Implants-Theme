<?php $bannerLoop = new WP_Query( array( 'orderby' => 'rand', 'showposts' => 1, 'post_type' => 'page_banner') );
while ( $bannerLoop->have_posts() ) : $bannerLoop->the_post(); ?>


<section class='invert-section hero bg-cover' style='background-image:url(<?php the_field('banner_image'); ?>);'>

<?php endwhile;?>
<?php wp_reset_postdata(); ?>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <h1>
        <?php
        if (isset($pageTitle)) {
	    	  echo $pageTitle;
        } else {
          the_title();
        }
	     ?>
        </h1>
      </div>
    </div>
  </div>
</section>