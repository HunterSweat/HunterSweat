<?php

// Remove default actions to avoid conflicts
add_action('init', function() {
    remove_action('admin_init', 'arilewp_project_meta_init');
    remove_action('save_post', 'arilewp_save_meta_portfolio');
});

// Function to render meta boxes
function child_meta_for_portfolio() {
    $custom_portfolio_link = sanitize_text_field(get_post_meta(get_the_ID(), 'custom_portfolio_link', true));
    $custom_portfolio_target = sanitize_text_field(get_post_meta(get_the_ID(), 'custom_portfolio_target', true));
    $custom_portfolio_short_description = sanitize_textarea_field(get_post_meta(get_the_ID(), 'custom_portfolio_description', true));
    $custom_portfolio_single_description = get_post_meta(get_the_ID(), 'custom_portfolio_single_description', true);

    ?>
    <p><h4 class="heading"><?php esc_html_e('Link', 'arilewp'); ?></h4></p>
    <p>
        <input style="width:600px;" name="custom_portfolio_link" id="custom_portfolio_link" placeholder="<?php esc_attr_e('Link', 'arilewp'); ?>" type="text" value="<?php echo esc_attr($custom_portfolio_link); ?>">
    </p>
    <p>
        <input type="checkbox" id="custom_portfolio_target" name="custom_portfolio_target" <?php checked($custom_portfolio_target, 'on'); ?>>
        <?php esc_html_e('Open link in new tab', 'arilewp'); ?>
    </p>
    <p><h4 class="heading"><?php esc_html_e('Short Description', 'arilewp'); ?></h4></p>
    <p>
        <textarea name="custom_portfolio_description" id="custom_portfolio_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="<?php esc_attr_e('Description', 'arilewp'); ?>" rows="3" cols="10"><?php echo esc_html($custom_portfolio_short_description); ?></textarea>
    </p>
    <p><h4 class="heading"><?php esc_html_e('Single Description', 'arilewp'); ?></h4></p>
    <p>
        <?php
        $editor_id = 'custom_portfolio_single_description'; // Editor ID for the WYSIWYG editor
        wp_editor($custom_portfolio_single_description, $editor_id, array(
            'textarea_name' => 'custom_portfolio_single_description',
            'textarea_rows' => 10,
            'teeny' => true,
            'media_buttons' => true
        ));
        ?>
    </p>
    <?php
}

// Initialize meta boxes
function child_project_meta_init() {
    add_meta_box('child_project_meta_details', __('Project Details', 'arilewp'), 'child_meta_for_portfolio', 'arilewp_portfolio', 'normal', 'high');
    add_meta_box('arilewp_page_slider', __('Show Slider on the Page', 'arilewp'), 'arilewp_page_slider_show', 'page', 'normal', 'high');
}
add_action('add_meta_boxes', 'child_project_meta_init');

// Save meta box data
function child_save_meta_portfolio($post_id) {
    // Check for autosave, AJAX, and bulk edit
    if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX) || isset($_REQUEST['bulk_edit'])) {
        return;
    }

    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom portfolio fields
    if (get_post_type($post_id) === 'arilewp_portfolio') {
        if (isset($_POST['custom_portfolio_link'])) {
            update_post_meta($post_id, 'custom_portfolio_link', sanitize_text_field($_POST['custom_portfolio_link']));
        }
        if (isset($_POST['custom_portfolio_target'])) {
            update_post_meta($post_id, 'custom_portfolio_target', sanitize_text_field($_POST['custom_portfolio_target']));
        }
        if (isset($_POST['custom_portfolio_description'])) {
            update_post_meta($post_id, 'custom_portfolio_description', sanitize_textarea_field($_POST['custom_portfolio_description']));
        }
        if (isset($_POST['custom_portfolio_single_description'])) {
            update_post_meta($post_id, 'custom_portfolio_single_description', wp_kses_post($_POST['custom_portfolio_single_description']));
        }
    }

    // Save page-specific fields
    if (get_post_type($post_id) === 'page') {
        if (isset($_POST['page_slider_enable'])) {
            update_post_meta($post_id, 'page_slider_enable', sanitize_text_field($_POST['page_slider_enable']));
        }
    }
}
add_action('save_post', 'child_save_meta_portfolio');
?>