<div class='col-sm-4'>
  <h4>
    <?php the_title();?>
  </h4>
  <a class='employee-more fancybox fancybox.ajax' href='<?php the_permalink();?>'>
    <img class='img-circle margin-bottom' src='<?php the_field("employee_image");?>' width='220px'>
  </a>
  <h6 class='medium-font-name'>
    <a href='mailto:<?php the_field('employee_email');?>'>
      <?php the_field('employee_email');?>
    </a>
  </h6>
</div>