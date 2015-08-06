<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till content wrapper
 *
 * @package Stacker
 */
?><!DOCTYPE html>

<!-- testing -->

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link href='http://fonts.googleapis.com/css?family=Monda:700|Vollkorn' rel='stylesheet' type='text/css'>

	<?php
	wp_head();
	echo stacker_load_homepage_column_count();
	?>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65663311-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>

<div id="header">
<div id="headerwrap"
<div id="sitebranding">
<?php if ( function_exists( 'has_site_logo' ) && has_site_logo() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php echo esc_url( get_site_logo( 'url' ) ); ?>" class="site-logo" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
		</a>
	<?php endif; // End site logo check. ?>
	<h1 class="sitetitle">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
			   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
			   rel="home"><span><?php bloginfo( 'name' ); ?></span></a>
	</h1>
    </div><!--End Site Branding -->
</div> <!-- End Headerwrap -->
</div>

<div id="cssmenu" class="align-center">
	<?php
	wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => false,
			'items_wrap'     => '<ul>%3$s</ul>',
			'depth'          => 0,
			'fallback_cb'    => 'stacker_fallback_menu',
		)
	);
	?>
</div>
<!--End Header -->