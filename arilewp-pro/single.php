<?php
/** 
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package arilewp
 */

get_header();
get_template_part('template-parts/site','breadcrumb');
$arilewp_single_blog_pages_layout = get_theme_mod('arilewp_single_blog_pages_layout', 'arilewp_no_sidebar');
$arilewp_single_blog_container_size = get_theme_mod('arilewp_single_blog_container_size', 'container');
if($arilewp_single_blog_container_size == 'container-full'){$container = '9';}else{$container = '8';}
?>

<?php

$galleryArray = get_post_gallery_ids();

?>
    <section class="theme-main-slider" id="theme-slider" style="padding: 100px;">

        <div id="theme-main-slider" class="owl-carousel owl-theme owl-loaded owl-drag">

           <?php foreach ($galleryArray as $id) {
               $image_url = wp_get_attachment_url( $id );
               $alt_text = get_post_meta( $id, '_wp_attachment_image_alt', true );
               $title = get_post_field('post_title', $id);
               $caption = get_post_field('post_excerpt', $id);
               $description = get_post_field('post_content', $id);
               ?>


               <div class="item" style="background-image:url('<?php echo $image_url; ?>');"
                                 aria-label="<?php echo esc_attr($alt_text); ?>"
                                title="<?php echo esc_attr($title);  ?>"
                                data-caption="<?php echo esc_attr($caption); ?>"
                                data-description="<?php echo esc_attr($description) ?>"
                                alt="<?php echo esc_attr($alt_text);  ?>"></div>

            <?php } ?>
            </div>
    </section>

<section class="theme-block theme-blog theme-blog-large theme-bg-grey">

	<div class="<?php echo $arilewp_single_blog_container_size; ?>">

		<div class="row">
		<?php if($arilewp_single_blog_pages_layout == 'arilewp_left_sidebar' ||  !$arilewp_single_blog_pages_layout == 'arilewp_no_sidebar'): ?>
		<!--/Blog Section-->
		<?php get_template_part( 'template-parts/sidebar', 'single' ); ?>
		<?php endif; ?>

		<?php if($arilewp_single_blog_pages_layout == 'arilewp_no_sidebar'): ?>

		    <div class="col-lg-12 col-md-12 col-sm-12">


        <?php else: ?>

            <div class="col-lg-<?php echo ( !is_active_sidebar( 'sidebar-main' ) ? '12' :''.$container.'' ); ?> col-md-<?php echo ( !is_active_sidebar( 'sidebar-main' ) ? '12' :''.$container.'' ); ?> col-sm-12">

        <?php endif; ?>





                <?php



			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-single', get_post_type() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;


			endwhile; // End of the loop.
//			?>

		</div>
		<?php if($arilewp_single_blog_pages_layout == 'arilewp_right_sidebar' || !$arilewp_single_blog_pages_layout == 'arilewp_no_sidebar'): ?>
		<!--/Blog Section-->
			<?php get_template_part( 'template-parts/sidebar', 'single' ); ?>
        <?php endif; ?>
		</div>

	</div>

</section>

<?php
get_footer();