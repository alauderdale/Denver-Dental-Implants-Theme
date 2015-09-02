<?php get_header(); ?>

<!-- page header -->

<?php $pageTitle = 'Blog' ?>

<?php  set_query_var( 'pageTitle' , $pageTitle );
get_template_part( 'content', 'page_header' ); 
?>

<!-- end page header -->

<section class='blog blog-index'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <?php 
// the query to set the posts per page to 10
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array('posts_per_page' => 10, 'paged' => $paged );
        query_posts($args); ?>
        <!-- the loop -->
        <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
          <div class='post-thumb'>
            <div class='row padding-top'>
              <div class='col-md-8 col-sm-6'>
                <h4>
                  <a href='<?php the_permalink(); ?>'>
                    <?php the_title(); ?>
                  </a>
                </h4>
                <h6 class='extra-light-text-color'>
                  posted on <?php the_date(); ?>
                </h6>
                <div class='visible-xs'>
                  <a href='blog/single'>
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <a href='<?php the_permalink();?>'>
                        <img 
                        class='img-responsive margin-bottom margin-top' 
                        src='<?php echo $image[0]; ?>' 
                        style="max-width:280px;"
                        >
                      </a>
                    <?php endif; ?>
                  </a>
                </div>
                <p class='lead'>
                  <?php the_excerpt();?>
                </p>
                <a class='btn btn-primary margin-bottom' href='<?php the_permalink(); ?>'>
                  READ MORE
                </a>
              </div>
              <div class='col-md-1 col-sm-1'></div>
              <div class='col-md-3 hidden-xs col-sm-5'>
                <a href='blog/single'>
                  <?php if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <a href='<?php the_permalink();?>'>
                      <img 
                      class='img-responsive margin-bottom margin-top' 
                      src='<?php echo $image[0]; ?>' 
                      >
                    </a>
                  <?php endif; ?>
                </a>
              </div>
            </div>
            <hr>
          </div>
        <?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>

        <nav>
          <ul class='pager'>
            <li>
              <?php next_posts_link('&laquo; Older'); ?>
            </li>
            <li>
              <?php previous_posts_link('Newer &raquo;'); ?>
            </li>
          </ul>
        </nav>



      <?php else : ?>
        <!-- No posts found -->
      <?php endif; ?>
    </div>
  </div>
</div>
</section>

<?php get_footer(); ?>