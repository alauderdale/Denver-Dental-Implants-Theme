<?php get_header(); ?>

<style type="text/css">
	
li#menu-item-3673 a{
	color:#85C342;
	border-left:3px solid #85C342;
}

</style>

<!-- page header -->

<?php $pageTitle = 'Patient Library' ?>

<?php  set_query_var( 'pageTitle' , $pageTitle );
        get_template_part( 'content', 'page_header' ); 
?>

<!-- end page header -->


<?php $posttype = 'library' ?>

<?php  set_query_var( 'posttype', $posttype );
        get_template_part( 'content', 'wiki_page' ); 
?>



<?php get_footer(); ?>