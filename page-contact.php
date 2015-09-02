<?php
/*
Template Name: Contact
 */
?>

<?php get_header(); ?>


<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
?>

<?php while ( have_posts() ) : the_post(); ?>

<div class='map-wrap'>
  <section class='padding-top padding-bottom contact-map-container'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-4 col-sm-6'>
          <div class='card' style="max-width:380px;">
            <?php the_field('info_card');?>
          </div>
        </div>
        <div class='col-md-4 col-sm-6'>
        </div>
      </div>
    </div>
  </section>
  <div class='google-map'>
    <iframe allowfullscreen='' frameborder='0' height='1000' src='<?php the_field('google_map_url');?>' style='border:0;' width='100%'></iframe>
  </div>
</div>
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-7 col-md-6 col-sm-7'>
        <div class='padded'>
          <h5 class='heading-bordered heading-bordered-left'>
            Location
          </h5>
          <?php the_field('location_info');?>
        </div>
      </div>
      <div class='col-lg-5 col-md-6 col-sm-5'>
        <div class='padded'>
          <h5 class='heading-bordered heading-bordered-left'>
            Office Hours
          </h5>
          <?php the_field('hours_info');?>

        </div>
      </div>
    </div>
  </div>
</section>
<section class='invert-section contact-form'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-4'>
        <div class='padded no-padding-bottom'>
          <h4>
            How Can We Help?
          </h4>
          <?php the_field('help_text');?>
        </div>
      </div>
      <div class='col-md-8'>
        <div class='padded no-padding-bottom'>
          <?php the_field('contact_form_shortcode');?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>