<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( get_the_title() ) { 
		if ( function_exists( 'get_field' ) ) {
			$sub_title = get_field( 'sampletheme_page_header_sub_title' );
			$toggle_title = get_field( 'sampletheme_page_header_toggle_title' );
			if ( empty( $toggle_title ) ) {
				?>
					<header class="entry-header">
						<?php 
							the_title( '<h1 class="entry-title">', '</h1>' );
						    if ( ! empty( $sub_title ) ) {
								?>
								<p><?php echo esc_html($sub_title); ?></p>
								<?php
							}
						?>
					</header><!-- .entry-header -->
				<?php 
			}
		} else {
			?>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			<?php } ?>
	<?php } ?>	
	

	<?php // sampletheme_post_thumbnail(); ?>

	<?php if ( has_post_thumbnail() ) { ?>
	<div class="post-thumbnail">
		<img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>">
	</div><!-- post thumbnail -->
	<?php } ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sampletheme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'sampletheme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
