<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package venture-kids
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


<header id="masthead" class="site-header">
	<div class="site-branding">

	<section class='navmenu'>
		
			<div class='logo'>
				<div>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>	
					<?php

					if ( is_front_page() && is_home() ) :
					?>
						
					<?php endif; ?>

						<?php wp_head(); ?>
			 	</div>

			 <div class='mainmenu'>
				
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
				</div>
			</div>	
		</div>
	</section>
	</div>
</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
		
		
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
