<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sampletheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-6">
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
			$sampletheme_description = get_bloginfo( 'description', 'display' );
			if ( $sampletheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $sampletheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
				</div>
				<div class="cell small-6">
					<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sampletheme' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>

				<?php
					$facebook_url = get_theme_mod( 'facebook_url' );
					$twitter_url = get_theme_mod( 'twitter_url' );
					$linkedin_url = get_theme_mod( 'linkedin_url' );

					if ( $facebook_url ){ 
						?>
						<a class="facebook-link" href="<?php echo esc_url($facebook_url); ?>"><?php echo esc_html__( 'Facebook', 'sampletheme' ); ?></a>
						<?php 
					} 

					if ( $twitter_url ){ 
						?>
						<a class="twitter-link" href="<?php echo esc_url($twitter_url); ?>"><?php echo esc_html__( 'Twitter', 'sampletheme' ); ?></a>
						<?php 
					} 

					if ( $linkedin_url ){ 
						?>
						<a class="linkedin-link" href="<?php echo esc_url($linkedin_url); ?>"><?php echo esc_html__( 'LinkedIn', 'sampletheme' ); ?></a>
						<?php 
					} 
				?>
				
			</nav>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
