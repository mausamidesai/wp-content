<?php
/**
 * The template - sidebar(right)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sample_Theme
 */

get_header();
?>
<div class="grid-container">
<div class="grid-x grid-margin-x grid-margin-y">

    <div class="cell small-12 medium-8">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
    </div><!-- .cell -->

	<!-- sidebar-right -->
    <div class="cell small-12 medium-8">
        <?php get_sidebar(); ?>    
    </div>

</div>
</div><!-- .grid-container -->
<?php
get_footer();
