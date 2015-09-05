<?php get_header(); ?>

<style type="text/css">
	
li#menu-item-3672 a{
	color:#f09241;
	border-left:3px solid #f09241;
}

</style>


<!-- page header -->

<?php $pageTitle = 'Our Services' ?>

<?php  set_query_var( 'pageTitle' , $pageTitle );
        get_template_part( 'content', 'page_header' ); 
?>

<!-- end page header -->



<?php $posttype = 'services' ?>

<?php  set_query_var( 'posttype', $posttype );
        get_template_part( 'content', 'wiki_page' ); 
?>



<?php get_footer(); ?>