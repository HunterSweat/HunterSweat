<?php

/**
 *
 * Service custom post type
 *
 **/

    function arilewp_custom_service_type(){
            register_post_type('arilewp_service', array( 'labels' => array(
                    'name' => __('Services', 'arilewp'),
                    'add_new' => __('Add New', 'arilewp'),
                    'add_new_item' => __('Add New Service','arilewp'),
                    'edit_item' => __('Add New','arilewp'),
                    'new_item' => __('New Link','arilewp'),
                    'all_items' => __('All Services','arilewp'),
                    'view_item' => __('View Link','arilewp'),
                    'search_items' => __('Search Links','arilewp'),
                    'not_found' =>  __('No Links found','arilewp'),
                    'not_found_in_trash' => __('No Links found in Trash','arilewp'), ),
                    'supports' => array('title','thumbnail'),
                    'show_in_nav_menus' => false,
                    'public' => true,
                    'rewrite' => array('slug' => 'services'),
                    'menu_position' => 20,
                    'public' => true,
                    'menu_icon' => get_template_directory_uri() . '/assets/img/project.png',
                )
            );
        }
    add_action('init', 'arilewp_custom_service_type');

    ?>