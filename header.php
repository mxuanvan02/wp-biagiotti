<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biagiotti
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'biagiotti' ); ?></a>

	<div class="announcement-bar text-light pt-2 pb-2">
		<div class="container-fluid">
			<div class="row fst-italic">
				<div class="col-4 text-start">
					<a class="text-decoration-none text-light" href="mailto:biagiotti@qodeinteractive.com">biagiotti@qodeinteractive.com</a>
				</div>
				<div class="col-4 text-center">
					<div>Free shipping on international orders of $150+</div>
				</div>
				<div class="col-4 text-end">
					<a class="text-decoration-none text-light" href="#">Log In <i class="bi bi-person"></i></a>
				</div>
			</div>
		</div>
	</div>


	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row row-cols-sm-1 row-cols-2">
				
				<div class="site-header__logo pt-4 col">
					<?php the_custom_logo(); ?>
				</div>

				<nav id="site-navigation" class="main-navigation col">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i>
						<?php esc_html_e( '', 'biagiotti' ); ?>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
			
			</div>
		
		</div>
		


	</header><!-- #masthead -->
