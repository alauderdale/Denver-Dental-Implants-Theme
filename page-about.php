<?php
/*
Template Name: About
 */
?>


<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class='invert-section hero bg-cover' style='background-image:url(<?php the_field('about_background_image');?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-7'>
        <h1>
          <?php the_title();?>
        </h1>
        <blockquote class='light-font-name'>
          <?php the_field('about_testimonial_text');?>
        </blockquote>
      </div>
      <div class='col-sm-5'></div>
    </div>
  </div>
</section>
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-7'>
        <?php the_content();?>
      </div>
      <div class='cl-sm-5'></div>
    </div>
  </div>
</section>
<?php endwhile; // end of the loop. ?>

<?php get_template_part( 'about', 'accordian' ); ?>





<?php get_template_part( 'content', 'appt_banner' ); ?>
<?php get_footer(); ?>