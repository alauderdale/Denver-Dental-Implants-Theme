<?php
/*
Template Name: Home
 */
?>


<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class='invert-section hero bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/home_banner.png);'>
  <div class='container'>
    <div class='col-lg-12'>
      <h1>
        We Create
        <br>
        <span class='light-font-name'>
          Beautiful Smiles.
        </span>
        <br>
        For life.
      </h1>
      <a class='btn btn-primary' href='<?php the_field('smile_gallery_link');?>'>
        VIEW OUR SMILE GALLERY
      </a>
    </div>
  </div>
</section>
<section>
  <div class='container'>
    <div class='col-lg-12'>
      <h5 class='text-center heading-bordered'>
        A step above excellence
      </h5>
    </div>
    <div class='row'>
      <div class='col-md-6'>
        <div class='padded'>
          <img class='img-responsive margin-bottom margin-auto' src='<?php the_field('homepage_graphic');?>'>
        </div>
      </div>
      <div class='col-md-6'>
        <div class='margin-top padded'>
          <?php the_content();?>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='text-center double-margin-top'>
        <a class='btn btn-primary' href='<?php the_field('learn_more_link');?>'>
          Learn More About Us
        </a>
      </div>
    </div>
  </div>
</section>
<div class='container'>
  <div class='col-lg-12'>
    <hr>
  </div>
</div>
<section>
  <div class='container'>
    <div class='col-lg-12'>
      <h5 class='text-center heading-bordered'>
        WHAT OUR SMILES ARE SAYING
      </h5>
    </div>
    <div class='row'>
      <div class='col-md-6 col-md-push-6'>
        <div class='padded no-padding-bottom'>
          <img class='img-responsive margin-auto-md' src='<?php the_field('testimonial_graphic');?>' style='position:relative; top:-30px;'>
        </div>
      </div>
      <div class='col-md-6 col-md-pull-6'>
        <div class='margin-top padded no-padding-top'>
                  <?php $testimonialLoop = new WP_Query( array('post_type' => 'testimonials', 'posts_per_page' => 1,  'orderby'=>'rand') ); ?>

            <?php while ( $testimonialLoop->have_posts() ) : $testimonialLoop->the_post(); 

            $name = (get_post_meta($post->ID, 'Name', true));

          ?>
          <blockquote>
            <?php the_content();?>
            <footer>
                <?php echo $name ?>
            </footer>
          </blockquote>
          <?php wp_reset_postdata(); ?>
          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='text-center double-margin-top'>
        <a class='btn btn-primary' href='<?php the_field('testimonial_link');?>'>
          HEAR FROM MORE PATIENTS
        </a>
      </div>
    </div>
  </div>
</section>
<?php endwhile; // end of the loop. ?>
<?php get_template_part( 'content', 'appt_banner' ); ?>

<?php get_footer(); ?>