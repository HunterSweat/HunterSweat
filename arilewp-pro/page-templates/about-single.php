<?php
/**
 *
 * Template Name: About Single
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
?>
    <section class="theme-block theme-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php
                    $theme_mods = get_theme_mods();


                    foreach ($theme_mods as $key => $value){
                        print_r($key); echo ":  "; print_r($value); echo "<br><br>";

                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>