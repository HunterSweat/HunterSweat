<?php 
/**
 *
 * Template Name: Contact One
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
get_template_part('template-parts/site','breadcrumb');
$arilewp_contact_info_disabled = get_theme_mod('arilewp_contact_info_disabled', true);
$arilewp_google_map_disabled = get_theme_mod('arilewp_google_map_disabled', true);
$arilewp_contact_form_disabled = get_theme_mod('arilewp_contact_form_disabled', true);
$arilewp_contact_form_title = get_theme_mod('arilewp_contact_form_title', 'Drop Us a Message');
$arilewp_contact_about_title = get_theme_mod('arilewp_contact_about_title', 'Read About Us');
$arilewp_contact_about_accordion = get_theme_mod('arilewp_contact_about_accordion');
?>
<!-- Contact Info -->
	<section class="theme-block theme-bg-grey">
		<div class="container">
		    <?php if( has_post_thumbnail() ): ?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php $arg = array( 'class'=>'img-fluid' ); the_post_thumbnail( '',$arg ); ?>
					</div>
				</div>
		    <?php endif; ?>
		    <?php if($arilewp_contact_info_disabled != null) : ?>
	            <?php get_template_part( 'template-parts/contact', 'info' ); ?>
			<?php endif; ?>
		</div>





    <section class="theme-contact wow animate fadeInUp" data-wow-delay=".3s">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="theme-section-module text-center">
                        <h4 class="theme-section-title small"><?php echo $arilewp_contact_about_title ?></h4>
                            <div class="theme-separator-line-horrizontal-full">
                            </div>
                    </div>

                </div>

                    <div class="accordion-body">
                        <div class="accordion">

                            <?php
                            if ( ! empty( $arilewp_contact_about_accordion ) ) {
                            $allowed_html = array(
                                'br'     => array(),
                                'em'     => array(),
                                'strong' => array(),
                                'b'      => array(),
                                'i'      => array(),
                            );
                            $arilewp_contact_about_accordion = json_decode( $arilewp_contact_about_accordion );



                            foreach ($arilewp_contact_about_accordion as $accordion_item) {
                              $title = !empty($accordion_item->title) ? apply_filters( 'arilewp_translate_single_string', $accordion_item->title, 'Theme Accordion Info') : '';
                              $text = !empty($accordion_item->text) ? apply_filters( 'arilewp_translate_single_string', $accordion_item->text, 'Theme Accordion Info') : '';
                              $image = !empty($accordion_item->image_url) ? apply_filters( 'arilewp_translate_single_string', $accordion_item->image_url, 'Theme Accordion Info') : '';
                              $imageId = attachment_url_to_postid($image);
                              $alt_text = get_post_meta($imageId, '_wp_attachment_image_alt', true);
                              $image_desc = get_post($imageId)->post_content;

                              ?>
                                <div class="col-lg-12 col-md-12 col-xs-12 acontainer theme-contact-widget text-center wow animate fadeInUp" data-wow-delay=".3s">
                                    <?php if( !empty($title) ) { ?>
                                    <div class="label text-center"><?php echo esc_html( $title ); ?> </div>
                                    <?php } ?>
                                    <?php if( !empty( $text ) ) { ?>
                                    <div class="content">
                                        <div class="content-inner">
                                            <div class="text-content">
                                        <?php if ( ! empty( $image ) ) { ?>
                                                <img src="<?php echo esc_url( $image ); ?>" aria-label="<?php echo esc_attr( $image_desc ); ?>" alt="<?php echo esc_attr( $alt_text ); ?>" class="inline-image">
                                        <?php } ?>
                                                <div class="text-wrapper">

                                                    <?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>

                            <?php } }?>
                </div>
            </div>

	</section>
	
	<?php if($arilewp_google_map_disabled == true) : ?>
		<!-- /End of Contact Info -->	
		<?php if( get_theme_mod('arilewp_google_map_shortcode') != null ): ?>
		<!-- Map Section -->
			<section id="google-map" class="wow animate fadeInUp" data-wow-delay=".3s">
					<?php echo do_shortcode(get_theme_mod('arilewp_google_map_shortcode')); ?>
			</section>
		<!-- /Map Section -->
		<?php endif; ?>
	<?php endif; ?>
	
	
	<?php if($arilewp_contact_form_disabled == true ): ?>
	<!-- Contact Form -->
	<section class="theme-bg-gray wow animate fadeInUp" data-wow-delay=".3s" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="theme-section-module text-center" style="padding-top: 50px">
						<h2 class="theme-section-title small"><?php echo $arilewp_contact_form_title; ?></h2>
						<div class="theme-separator-line-horrizontal-full"></div>
					</div>
				</div>
			</div>
		<?php if ( $post->post_content !== null) :  ?>
			<div class="row justify-content-md-center">
				<div class="col-lg-8 col-md-8 col-sm-12">				
               	<?php 
					// Start the Loop.
					while ( have_posts() ) : the_post();
						// Include the page
						
						the_content( __('Read More','arilewp') );
					    wp_link_pages();
						
						comments_template( '', true ); // show comments
						
					endwhile;
					?>	
				</div>	
			</div>
		<?php endif; ?>	
		</div>
	</section>
	<!-- /End of Contact Form -->
	<?php endif; ?>

<?php
get_footer();?>
