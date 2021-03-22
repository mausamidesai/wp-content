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

	<footer id="colophon" class="site-footer">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-3">
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
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
