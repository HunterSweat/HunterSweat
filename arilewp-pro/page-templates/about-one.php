<?php
/**
 *
 * Template Name: About One
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
if (get_post_meta(get_the_ID(), 'page_slider_enable', true)) {
    get_template_part('template-parts/index', 'slider');
}
get_template_part('template-parts/site', 'breadcrumb');
$arilewp_about_site_info_disabled = get_theme_mod('arilewp_about_site_info_disabled', true);
$arilewp_about_funfact_disabled = get_theme_mod('arilewp_about_funfact_disabled', true);
$arilewp_about_team_disabled = get_theme_mod('arilewp_about_team_disabled', true);
$arilewp_about_client_disabled = get_theme_mod('arilewp_about_client_disabled', true);
?>


    <!-- Funfact -->
<?php if ($arilewp_about_funfact_disabled == false) :

    $arilewp_funfact_content = get_theme_mod('arilewp_funfact_content');
    $arilewp_funfact_overlay_disable = get_theme_mod('arilewp_funfact_overlay_disable', true);
    $arilewp_funfact_column_layout = get_theme_mod('arilewp_funfact_column_layout', '4');
    $arilewp_funfact_column_layout = 12 / $arilewp_funfact_column_layout;
    $arilewp_funfact_front_container_size = get_theme_mod('arilewp_funfact_front_container_size', 'container');
    ?>
    <!-- Funfact Section -->
    <section class="theme-funfact" id="theme-funfact">
        <?php if ($arilewp_funfact_overlay_disable == true): ?>
            <div class="theme-funfact-overlay"></div>
        <?php endif; ?>
        <div class="<?php echo $arilewp_funfact_front_container_size; ?>">
            <div class="row">
                <?php
                if (!empty($arilewp_funfact_content)) {
                    $allowed_html = array(
                        'br' => array(),
                        'em' => array(),
                        'strong' => array(),
                        'b' => array(),
                        'i' => array(),
                    );
                    $arilewp_funfact_content = json_decode($arilewp_funfact_content);
                    foreach ($arilewp_funfact_content as $features_item) {
                        $icon = !empty($features_item->icon_value) ? apply_filters('arilewp_translate_single_string', $features_item->icon_value, 'Theme Funfact') : '';
                        $title = !empty($features_item->title) ? apply_filters('arilewp_translate_single_string', $features_item->title, 'Theme Funfact') : '';
                        $text = !empty($features_item->text) ? apply_filters('arilewp_translate_single_string',
                            $features_item->text, 'Theme Funfact') : '';
                        ?>
                        <div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">
                            <div class="theme-funfact-inner wow animate fadeInUp" data-wow-delay=".3s">
                                <?php if (!empty($icon)) : ?>
                                    <i class="fa <?php echo esc_html($icon); ?> theme-funfact-icon"></i>
                                <?php endif; ?>
                                <?php if (!empty($title)) : ?>
                                    <p class="text-white"><?php echo esc_html($title); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($text)) : ?>
                                    <h2 class="theme-funfact-title"><?php echo wp_kses(html_entity_decode($text), $allowed_html); ?></h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">
                        <div class="theme-funfact-inner wow animate fadeInLeft" data-wow-delay=".3s">
                            <i class="fa fa-coffee theme-funfact-icon"></i>
                            <p class="text-white"><?php esc_html_e('Coffee Cups', 'arilewp'); ?></p>
                            <h2 class="theme-funfact-title"><?php _e('507', 'arilewp'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">
                        <div class="theme-funfact-inner wow animate fadeInLeft" data-wow-delay=".3s">
                            <i class="fa fa-briefcase theme-funfact-icon"></i>
                            <p class="text-white"><?php esc_html_e('Projects', 'arilewp'); ?></p>
                            <h2 class="theme-funfact-title"><?php _e('175', 'arilewp'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">
                        <div class="theme-funfact-inner wow animate fadeInRight" data-wow-delay=".3s">
                            <i class="fa fa-line-chart theme-funfact-icon"></i>
                            <p class="text-white"><?php esc_html_e('Business Growth', 'arilewp'); ?></p>
                            <h2 class="theme-funfact-title"><?php _e('98%', 'arilewp'); ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-<?php echo $arilewp_funfact_column_layout; ?> col-md-6 col-sm-12">
                        <div class="theme-funfact-inner wow animate fadeInRight" data-wow-delay=".3s">
                            <i class="fa fa-smile-o theme-funfact-icon"></i>
                            <p class="text-white"><?php esc_html_e('Happy Clients', 'arilewp'); ?></p>
                            <h2 class="theme-funfact-title"><?php _e('125', 'arilewp'); ?></h2>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!-- Funfact -->

    <!-- Team -->
<?php
if ($arilewp_about_team_disabled == true) :

    $arilewp_team_content = get_theme_mod('arilewp_team_content');
    $arilewp_team_area_title = get_theme_mod('arilewp_team_area_title', 'Our Team');
    $arilewp_team_area_des = get_theme_mod('arilewp_team_area_des', '<b>Talented</b> People');
    $arilewp_team_front_container_size = get_theme_mod('arilewp_team_front_container_size', 'container');
    ?>
    <section class="theme-block team-mambers theme-bg-grey">
        <div class="<?php echo $arilewp_team_front_container_size; ?>">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="theme-section-module text-center">
                        <?php if ($arilewp_team_area_title != null): ?>
                            <p class="theme-section-subtitle wow animate fadeInLeft"
                               data-wow-delay=".3s"><?php echo $arilewp_team_area_title; ?></p>
                        <?php endif; ?>
                        <?php if ($arilewp_team_area_des != null): ?>
                            <h2 class="theme-section-title wow animate fadeInRight"
                                data-wow-delay=".3s"><?php echo $arilewp_team_area_des; ?></h2>
                        <?php endif; ?>
                        <div class="theme-separator-line-horrizontal-full wow animate fadeInUpBig"
                             data-wow-delay=".3s"></div>
                    </div>
                </div>
            </div>
            <div class="row theme-team-content theme-project">
                <?php
                $arilewp_team_content = json_decode($arilewp_team_content);
                if ($arilewp_team_content != '') {
                    foreach ($arilewp_team_content as $team_content) {
                        $image = !empty($team_content->image_url) ? apply_filters('arilewp_translate_single_string', $team_content->image_url, 'Theme Team') : '';
                        $title = !empty($team_content->title) ? apply_filters('arilewp_translate_single_string', $team_content->title, 'Theme Team') : '';
                        $subtitle = !empty($team_content->subtitle) ? apply_filters('arilewp_translate_single_string', $team_content->subtitle, 'Theme Team') : '';
                        $link = !empty($team_content->link) ? apply_filters('arilewp_translate_single_string', $team_content->link, 'Theme Team') : '';
                        $text = !empty($team_content->text) ? apply_filters('arilewp_translate_single_string', $team_content->text, 'Theme Team') : '';

                        if (!empty($team_content->open_new_tab)) {
                            $open_new_tab = $team_content->open_new_tab;
                        } else {
                            $open_new_tab = 'no';
                        }
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="team-block wow animate fadeInUp flipInY theme-project-team border-0" data-wow-delay=".3s">
                                <div class="portfolio-thumbnail" style="background-color: black;">
                                    <?php if (!empty($image)) : ?>
                                        <?php
                                        if (!empty($link)) :
                                            $link_html = '<a href="' . esc_url($link) . '"';
                                            if (function_exists('arilewp_is_external_url')) {
                                                $link_html .= arilewp_is_external_url($link);
                                            }
                                            $link_html .= '>';
                                            echo wp_kses_post($link_html);
                                        endif;
                                        echo '<img class="img-fluid" src="' . esc_url($image) . '"';
                                        if (!empty($title)) {
                                            echo 'alt="' . esc_attr($title) . '" title="' . esc_attr($title) . '"';
                                        }
                                        echo '/>';
                                        if (!empty($link)) {
                                            echo '</a>';
                                        }
                                        ?>
                                    <?php endif; ?>

                                    <div class="click-view">
                                        <div class="thumbnail-showcase-icons">

                                            <?php
                                                echo '<a href="' . esc_url($image) . '" data-lightbox="image" title="' . esc_attr($text) . '"><i class="fa fa-search"></i></a>';
                                            ?>
                                        </div>
                                    </div>

                                </div>
<!--                            </article>-->
                                <div class="team-content">
                                    <?php if (!empty($subtitle)) : ?>
                                        <span class="position"><?php echo esc_html($subtitle); ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($title)) : ?>
                                        <?php if (!empty($link)) : ?>
                                            <a href="<?php echo $link ?>" <?php if ($open_new_tab == 'yes') {
                                                echo 'target="_blank"';
                                            } ?>>
                                        <?php endif; ?>
                                        <h5 class="team-name"><?php echo esc_html($title); ?></h5>
                                        <?php if (!empty($link)) : ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if (!empty($team_content->social_repeater)) :
                                        $icons = html_entity_decode($team_content->social_repeater);
                                        $icons_decoded = json_decode($icons, true);
                                        if (!empty($icons_decoded)) : ?>
                                            <ul class="team-social">
                                                <?php
                                                foreach ($icons_decoded as $value) {
                                                    $social_icon = !empty($value['icon']) ? apply_filters('arilewp_translate_single_string', $value['icon'], 'Team section') : '';
                                                    $social_link = !empty($value['link']) ? apply_filters('arilewp_translate_single_string', $value['link'], 'Team section') : '';
                                                    if (!empty($social_icon)) { ?>
                                                        <li>
                                                            <a href="<?php echo esc_url($social_link); ?>" <?php if ($open_new_tab == 'yes') {
                                                                echo 'target="_blank"';
                                                            } ?>><i class="fa <?php echo esc_attr($social_icon); ?>"></i></a>
                                                        </li>
                                                    <?php }
                                                } ?>
                                            </ul> <?php
                                        endif;
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>

            </div>
        </div>
    </section>
<?php endif; ?>
    <!-- Team -->



<?php
get_footer();