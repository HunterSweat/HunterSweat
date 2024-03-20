<?php
function pd_custom_pd_css() {

    $arilewp_theme_custom_color = get_theme_mod('arilewp_theme_custom_color');


    if ( $arilewp_theme_custom_color != '#ff0000' ) :
        ?>

    <style type="text/css">

        .theme-services .service-content:hover .service-links a,
        .theme-services .service-content:focus .service-links a {
            color: #202020 !important;
            background: <?php echo $arilewp_theme_custom_color; ?>!important;
            border: 1px solid <?php echo $arilewp_theme_custom_color; ?>!important;
        }

        .service-links a {
            background: #202020 !important;
            color: #fff !important;
        }


    </style>


    <?php endif; }


?>


