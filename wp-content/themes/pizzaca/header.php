<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pizzaca
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Begin Mailchimp Signup Form -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<script src="https://www.fbgcdn.com/embedder/js/ewm2.js" defer async ></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pizzaca' ); ?></a>

		<header id="masthead" class="header">
			<div class="wrapper header-wrapper">
				<div class="header-content">
					<div class="site-branding">
						<div class="header-logo">
						<a href="<?php echo get_home_url(); ?>">
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/media/images/logo-text-dark.svg" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
						</div>
					</div>

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu"
							aria-expanded="false"><?php esc_html_e( 'Menu', 'pizzaca' ); ?>
							<svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 19l6-6m-6 6l-6-6m6 6V5"/></svg>
						</button>
						<div class="menu-items" id="nav-menu">
							<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
					)
				);
				?>
				<span class="nav-button button" data-glf-cuid="f4cbfa26-126d-4478-94a8-01d2c5ca7324" data-glf-ruid="541fea5b-5c12-4679-a77e-94dbb414f84b" >ORDER ONLINE</span>
						</div>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</header><!-- #masthead -->
		<!-- Announcement bar -->
		<?php get_template_part( 'template-parts/announcement-bar' ); ?>