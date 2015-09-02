<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.9.1.min.js" type="text/javascript"></script>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

  <?php if ( is_admin_bar_showing() ) { ?>

  <style type="text/css">
    .sliding-menu{
      top:32px!important;
    }
    .main-nav{
    	top:32px!important;
    }
    html{
      margin-top:0!important;
    }
    body{
      padding-top: 112px;
    }
    #wpadminbar{
      position: fixed;
    }
  </style>


  <?php } ?>

	<nav class='sliding-menu slide-menu-right'>
	  <button class='close-menu nav-toggler hidden-sm hidden-xs'>
	    <i class='md md-close'></i>
	  </button>
	  <div class='clearfix'></div>
	  <a class='btn btn-default hidden-md hidden-lg' href='<?php echo get_page_link(25); ?>'>
	    Make an Appointment
	  </a>
	  <?php wp_nav_menu( array( 
			'theme_location' => 'primary-home', 
			'container' => false, 
			'menu_class' => 'nav main-links',
			'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
		)); ?>
	  <?php wp_nav_menu( array( 
			'theme_location' => 'primary-company', 
			'container' => false, 
			'menu_class' => 'nav main-links',
			'items_wrap'  => '<ul id="%1$s" class="%2$s"> <li class="section-header"> Company </li>    %3$s</ul>' 
		)); ?>
	  <?php wp_nav_menu( array( 
			'theme_location' => 'primary-patients', 
			'container' => false, 
			'menu_class' => 'nav main-links',
			'items_wrap'  => '<ul id="%1$s" class="%2$s"> <li class="section-header"> Patients </li>    %3$s</ul>' 
		)); ?>
	  <div class='nav-padding-left'>
	    <hr>
	    <p>
	      <ul class='list-inline menu-social'>
		  		<?php
						$loop = new WP_Query( array( 'post_type' => 'social', 'posts_per_page' => -1, 'orderby'=>'meta_value','meta_key'=> 'Order', order=>'ASC' ) );
						$order = get_post_meta($post->ID, 'Order Of Display - Number', true);
					
						while ( $loop->have_posts() ) : $loop->the_post();
							$target = '_blank';
							$socialimg = get_post_meta($post->ID, 'Social Network Image', true);
							$sociallink = get_post_meta($post->ID, 'Social Network Link', true);
							$socialenabled = get_post_meta($post->ID, 'Social Network Enabled', true);
							$menuclass = get_post_meta($post->ID, 'Menu class', true);
							if($post->post_title == 'Blog Feed') $target = '_self';
							if ($socialenabled == "Enabled"){
							echo '<li><a target="'.$target.'" href="' . $sociallink . '"><i class="fa ' . $menuclass . ' "></i></a></li>';
							}
						endwhile;
						// Reset Post Data
						wp_reset_postdata();
					?>
	      </ul>
	    </p>
	    <p>
	      Dental Elements
	      <br>
	      1781 15th Street
	      <br>
	      Denver, CO 80202
	    </p>
	    <p>
	      303-309-4093
	      <br>
	      <a href='mailto:smile@dentalelements.com'>
	        smile@dentalelements.com
	      </a>
	    </p>
	  </div>
	</nav>
	<div id='wrapper'>
    <nav class='main-nav'>
      <div class='container'>
        <a class='navbar-brand' href='<?php bloginfo('url')?>'>
          <img src='<?php bloginfo('template_url'); ?>/images/logo@2x.png' width='210px'>
        </a>
        <div class='pull-right'>
          <button class='nav-toggler toggle-slide-right'>
            <span class='menu-text'>
              menu
              <i class='md md-menu'></i>
            </span>
          </button>
        </div>
        <div class='nav-links hidden-xs pull-right'>
          <ul class='nav main-links'>
            <li>
              <a href='<?php echo get_page_link(25); ?>'>
                MAKE AN APPOINTMENT
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end menu -->
    <div class='main'>