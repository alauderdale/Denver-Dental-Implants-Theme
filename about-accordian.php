<div aria-multiselectable='true' class='panel-group accordian-default' id='employee-accordion' role='tablist'>
<!-- dentist panel -->
  <div class='panel panel-default'>
    <div class='panel-heading' role='tab'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12'>
            <a aria-controls='collapse-d' aria-expanded='false' class='collapsed open' data-parent='#employee-accordion' data-toggle='collapse' href='#collapse-d'>
              <h5 class='no-margin-bottom'>
                Dentists
              </h5>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='clearfix'></div>
    <div class='panel-collapse collapse' id='collapse-d' role='tabpanel'>
            <?php $DentistsLoop = new WP_Query( array( 'post_type' => 'about','category_name' => 'Dentists') ); ?>
              <?php while ( $DentistsLoop->have_posts() ) : $DentistsLoop->the_post(); ?>
      <div class='panel-body therman' style="background-image:url(<?php the_field("employee_image");?>);">
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6'>
              <img class='visible-xs img-circle margin-bottom' src='<?php the_field("mobile_image");?>' width='220px'>
              <h4 class='quarter-margin-bottom'>
                <?php the_title();?>
              </h4>
              <h6 class='medium-font-name'>
                <a href='<?php the_field('employee_email');?>'>
                  <?php the_field('employee_email');?>
                </a>
              </h6>
              <div>
                <ul class='nav nav-tabs' role='tablist'>
                  <li class='active'>
                    <a aria-controls='home' data-toggle='tab' href='#bio' role='tab'>
                      Bio
                    </a>
                  </li>
                  <li>
                    <a aria-controls='profile' data-toggle='tab' href='#pro' role='tab'>
                      PROFESSIONAL AFFILIATIONS
                    </a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class='tab-content'>
                  <div class='tab-pane active fade in' id='bio' role='tabpanel'>
                    <?php the_content();?>
                  </div>
                  <div class='tab-pane fade' id='pro' role='tabpanel'>
                  	<?php the_field('affiliations');?>
                  </div>
                </div>
              </div>
              <?php endwhile; // end of the loop. ?>
            </div>
            <div class='col-sm-6'></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- end dentist panel -->
<!-- employees panel logic-->

  <div class='panel panel-default'>
    <div class='panel-heading' role='tab'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12'>
            <a aria-controls='collapse-0' aria-expanded='false' class='collapsed open' data-parent='#employee-accordion' data-toggle='collapse' href='#collapse-0'>
              <h5 class='no-margin-bottom'>
                HYGIENISTS
              </h5>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='clearfix'></div>
    <div class='panel-collapse collapse' id='collapse-0' role='tabpanel'>
      <div class='panel-body'>
        <div class='container'>
          <div class='row'>
          	<?php $HygienistsLoop = new WP_Query( array( 'post_type' => 'about','category_name' => 'Hygienists') ); ?>

						<?php while ( $HygienistsLoop->have_posts() ) : $HygienistsLoop->the_post(); ?>
            	<?php get_template_part( 'about', 'employee_thumb' ); ?>
            <?php endwhile; // end of the loop. ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class='panel panel-default'>
    <div class='panel-heading' role='tab'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12'>
            <a aria-controls='collapse-1' aria-expanded='false' class='collapsed open' data-parent='#employee-accordion' data-toggle='collapse' href='#collapse-1'>
              <h5 class='no-margin-bottom'>
                FRONT OFFICE
              </h5>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='clearfix'></div>
    <div class='panel-collapse collapse' id='collapse-1' role='tabpanel'>
      <div class='panel-body'>
        <div class='container'>
          <div class='row'>
          	<?php $frontOfficeLoop = new WP_Query( array( 'post_type' => 'about','category_name' => 'Front Office') ); ?>

						<?php while ( $frontOfficeLoop->have_posts() ) : $frontOfficeLoop->the_post(); ?>
            	<?php get_template_part( 'about', 'employee_thumb' ); ?>
            <?php endwhile; // end of the loop. ?>
          </div>
        </div>
      </div>
    </div>
  </div>


    <div class='panel panel-default'>
    <div class='panel-heading' role='tab'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12'>
            <a aria-controls='collapse-2' aria-expanded='false' class='collapsed open' data-parent='#employee-accordion' data-toggle='collapse' href='#collapse-2'>
              <h5 class='no-margin-bottom'>
                ASSISTANTS
              </h5>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='clearfix'></div>
    <div class='panel-collapse collapse' id='collapse-2' role='tabpanel'>
      <div class='panel-body'>
        <div class='container'>
          <div class='row'>
          	<?php $assistantsLoop = new WP_Query( array( 'post_type' => 'about','category_name' => 'Assistants') ); ?>

						<?php while ( $assistantsLoop->have_posts() ) : $assistantsLoop->the_post(); ?>
            	<?php get_template_part( 'about', 'employee_thumb' ); ?>
            <?php endwhile; // end of the loop. ?>
          </div>
        </div>
      </div>
    </div>
  </div>




<!-- end employees panel logic-->
</div>
