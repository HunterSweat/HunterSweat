<?php
/**
 *
 * Template Name: Builder Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arilewp
 */

get_header();
if (get_post_meta( get_the_ID(), 'page_slider_enable', true )) {
	get_template_part( 'template-parts/index', 'slider' );
}
?>

	<section id="page-builder" class="theme-builder">

		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile; // End of the loop.
		?>

	</section><!-- #page-builder -->

<?php
get_footer();
