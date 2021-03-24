<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */

?>
</div>

<?php
$bag_args = array(
	'post_type' => 'sampletheme_bag',
	'posts_per_page' => 3,
);

$bag_query = new WP_Query( $bag_args );

if ( $bag_query->have_posts() ) {
	while ( $bag_query->have_posts() ) {
		$bag_query->the_post();
		?>
		<h4 class="hQuery"><?php the_title(); ?></h4>
		<p><?php the_excerpt(); ?></p>
		<?php
	}
}
?>

	<footer id="colophon" class="site-footer">
		<div class="grid-container">

				<!-- <?php 
				// if(has_nav_menu('menu-footer')) {
				// wp_nav_menu(
				// 	array(
				// 		'theme_location' => 'menu-footer',
				// 		'menu_id'        => 'footer-menu',
				// 	)
				// );
				// }
				?> -->
				
				<div class="grid-x grid-padding-x">
				<div class="cell small-3">
					<div class="footerOne">
					<h5>QUICK LINKS</h5>
					<ul>
						<li> Home </li>
						<li> About Us </li>
						<li> Women  </li>
						<li> Men </li>
						<li> Sale </li>
						<li> Contact Us </li>
					</ul>
					</div>
				</div>
				<div class="cell small-3">
					<div Class="footerTwo">
					<h5>CUSTOMER CARE</h5>
					<ul>
						<li> Contact Us </li>
						<li> FAQ </li>
						<li> Order Status </li>
						<li> Returns & Exchanges </li>
						<li> Shipping Information </li>
						<li> Product Care & Repairs </li>
						<li> Gift Services </li>
						<li> Store Locator </li>
					</ul>
					</div>
				</div>
				<div class="cell small-3">
					<div Class="footerThree">
					<h5>ABOUT US</h5>
					<ul>
						<li> Yellow Bags Story </li>
						<li> Responsibility </li>
						<li> Yellow Bags Foundation </li>
						<li> Careers </li>
						<li> Tapestry </li>
						<li> Investor Relations </li>
					</ul>
					</div>
				</div>

				<div class="cell small-3">
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
				</div>
			</div>
		</div>

		<div class="grid-container">
		<div class="grid-x grid-padding-x">
				<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sampletheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'sampletheme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'sampletheme' ), 'sampletheme', '<a href="https://mausamidesai.com">Mausami Desai</a>' );
				?>
		    </div><!-- .site-info -->
			</div>
			</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
