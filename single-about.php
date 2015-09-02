<div class='container'>
  <div class='row'>
    <div class='col-md-4 text-center'>
      <img class='img-circle margin-bottom img-responsive margin-auto double-margin-top' src='<?php the_field('employee_image');?>' width='240px'>
    </div>
    <div class='col-md-8'>
      <h2 class='quarter-margin-bottom'>
        <?php the_title();?>
      </h2>
      <h6 class='medium-font-name'>
        <a href='mailto:<?php the_field('employee_email');?>'>
          <?php the_field('employee_email');?>
        </a>
      </h6>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content();?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</div>
