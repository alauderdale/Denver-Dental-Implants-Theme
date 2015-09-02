<section>
  <div class='container'>
    <div class="row">
      <div class='col-md-12'>
				<div class='nav-overview'>
			    <div class='row'>
			      <div class='col-md-12'>
				      <?php 
				      $terms = get_terms( 'category', array(
				        'post_type' => array($posttype),
				        'fields' => 'all'
				      ));
				      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
				        echo '<ul>';
				        foreach ( $terms as $term ) {
				        $catposts = get_posts(array(
				          'post_type' => $posttype,
				          'numberposts' => 1,
				          'post_status' => 'publish',
				          'category_name' => $term->slug,
				          'orderby' => 'date',
				          'order' => 'DESC'
				        ));

				        $list = get_the_terms( $post->ID, 'category' );
				        if ( !empty( $list ) ){
				          // get the first term
				          $currentterm = array_shift( $list );
				        }
				        echo '<li> <a href='.  get_permalink( $catposts[0]->ID )  .'>' . $term->name . '</a></li>';
				        }
				          echo '</ul>';
				        }
				      ?>
			      </div>
			    </div>
				</div>
				<?php the_content();?>
      </div>
    </div>
  </div>
</section>