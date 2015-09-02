<?php
/*
Template Name: Services
 */
?>


<?php get_header(); ?>

<!-- page header -->

<?php $pageTitle = 'Our Services'?>

<?php  set_query_var( 'pageTitle' , $pageTitle );
        get_template_part( 'content', 'page_header' ); 
?>

<!-- end page header -->

<?php while ( have_posts() ) : the_post(); ?>

<?php $posttype = 'services' ?>

<?php  set_query_var( 'posttype', $posttype );
        get_template_part( 'content', 'overview_page' ); 
?>


<?php endwhile; // end of the loop. ?>
	
<?php get_template_part( 'content', 'appt_banner' ); ?>


<?php get_footer(); ?>

