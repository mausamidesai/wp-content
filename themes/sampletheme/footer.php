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

<!-- A custom WP_Query for my bag post -->
<div class="grid-container">
	<div class="grid-x grid-padding-x">
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
					<!-- Title of bag post type -->
					<div class= "small-12 large-12 cell">
						<h3 class= "qTitle"><?php the_title(); ?></h3>
					</div>
					<!-- Featured Image of bag post type -->
					<div class= "qpic">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class= "small-12 large-12 cell text">
						<!-- Excerpt of bag post type -->
						<p class= "qExcerpt"><?php the_excerpt(); ?></p>
						<!-- Post Link of bag post type -->
						<p class= "qPostLink"><?php echo '<a href="' . esc_url( get_permalink() ) . '" class="qLink">Read more</a>'?></p>
					</div>
				<?php
			}
		}
		?>
	</div>
</div>

	<footer id="colophon" class="site-footer">
		<div class="grid-container">

			    <?php 
				// if(has_nav_menu('menu-footer')) {
				// wp_nav_menu(
				// 	array(
				// 		'theme_location' => 'menu-footer',
				// 		'menu_id'        => 'footer-menu',
				// 	)
				// );
				// }
				?> 
				
				<div class="grid-x grid-padding-x">
				<!-- Quick links of the site -->
				<div class="cell small-3">
					<div class="footerOne">
					<h5>QUICK LINKS</h5>
					<ul>
						<li> <a href= "https://cwd450001.local/">Home</a> </li>
						<li> <a href= "https://cwd450001.local/about/">About Us</a> </li>
						<li> <a href= "https://cwd450001.local/shop/">Shop</a> </li>
						<li> <a href= "https://cwd450001.local/my-account/">My Account</a> </li>
						<li> <a href= "https://cwd450001.local/checkout/">Check Out</a> </li>
						<li> <a href= "https://cwd450001.local/contact-2/">Contact Us</a> </li>
						<li> <a href= "https://cwd450001.local/cart/">Cart</a> </li>
						<li> <a href= "https://cwd450001.local/blog/">Blog</a> </li>
					</ul>
					</div>
				</div>
				<!-- Customer care of the site -->
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
				<!-- About of the site -->
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

				<!-- Social media links -->
				<div class="cell small-3 social">
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
		
		<!-- copyright -->
		<div class="grid-container">
			<div class="cell large-12 small-12 copy">
				<div class="copyright">
					<a href="https://wordpress.org/">Proudly powered by WordPress</a>
					<span class="seprator"> | </span>
					Yellow Bags by 	
					<a href="/">Mausami Desai</a>
		    	</div><!-- .copyright -->
			</div>
		</div><!-- .grid-container -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
