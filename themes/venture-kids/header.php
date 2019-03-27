<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package daria-day
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
@import url('https://fonts.googleapis.com/css?family=Noto+Sans+KR');
</style> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'daria-day' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$daria_day_description = get_bloginfo( 'description', 'display' );
			if ( $daria_day_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $daria_day_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'daria-day' ); ?></button> -->
			<!-- <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?> -->

			<div class="topnav" id="myTopnav">
				<a href=<?php echo site_url('/about') ?>>About</a>
				<a href=<?php echo site_url('/programs') ?>>Programs</a>
				<a href=<?php echo site_url('/events') ?>>Events</a>
				<a href=<?php echo site_url('/volunteers') ?>>Volunteers</a>
				<a href=<?php echo site_url('/sponsors') ?>>Sponsors</a>
				<a href=<?php echo site_url('/contact') ?>>Contact Us</a>
				<a href=<?php echo site_url('/donate') ?> class="donates">DONATE</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars fa-2x"></i>
				</a>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">