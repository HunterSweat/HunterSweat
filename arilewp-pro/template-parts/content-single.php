<?php
/**
 * Template part for displaying posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arilewp
 */
$blog_content_ordering = get_theme_mod('arilewp_general_blog_arcive_single_content_ordering', array('meta-one', 'title', 'meta-two'));
$arilewp_related_single_blog_disabled = get_theme_mod('arilewp_related_single_blog_disabled', true);
?>

                <?php

                // Display custom field for single description
                $custom_portfolio_single_description = get_post_meta(get_the_ID(), 'custom_portfolio_single_description', true);
                ?>

    <article class="post wow animate fadeInUp" data-wow-delay=".3s" <?php post_class(); ?>>

        <div class="post-content">
            <!-- Display the post title -->
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>

            <!-- Display the custom field description -->
            <?php if ($custom_portfolio_single_description) : ?>
                <div class="custom-single-description">
                    <?php echo wp_kses_post($custom_portfolio_single_description); ?>
                </div>
            <?php else : ?>
                <p><?php esc_html_e('No description available.', 'arilewp'); ?></p>
            <?php endif; ?>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->

<?php if ($arilewp_related_single_blog_disabled === false) : ?>
    <!-- Related posts or additional content could be added here -->
<?php endif; ?>