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

	<div class="announcement-bar bg-dark text-light pt-1 pb-1 d-none d-lg-block">
		<div class="container-fluid">
			<div class="row fst-italic">
				<div class="col-md-4 text-start">
					<a class="text-decoration-none text-light" href="mailto:biagiotti@qodeinteractive.com">biagiotti@qodeinteractive.com</a>
				</div>
				<div class="col-md-4 text-center">
					<div>Free shipping on international orders of $150+</div>
				</div>
				<div class="col-md-4 text-end">
					<a class="text-decoration-none text-light" href="#">Log In <i class="bi bi-person"></i></a>
				</div>
			</div>
		</div>
	</div>


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
			$biagiotti_description = get_bloginfo( 'description', 'display' );
			if ( $biagiotti_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $biagiotti_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'biagiotti' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
