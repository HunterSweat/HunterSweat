<?php

add_action( 'init', function() {
    remove_action('admin_init', 'arilewp_project_meta_init');
    remove_action( 'save_post', 'arilewp_save_meta_portfolio');
});

function child_meta_for_portfolio()
{
    $custom_portfolio_link =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_link', true ));
    $custom_portfolio_target =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_target', true ));
    $custom_portfolio_short_description =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_description', true ));
    $custom_portfolio_single_description =sanitize_text_field( get_post_meta( get_the_ID(), 'custom_portfolio_single_description', true ));
    ?>
        <p><h4 class="heading"><?php esc_attr_e('Link','arilewp');?></h4></p>
        <p><input style="width:600px;" name="custom_portfolio_link" id="custom_portfolio_link" placeholder="<?php esc_attr_e('Link','arilewp');?>" type="text" value="<?php if (!empty($custom_portfolio_link)) echo esc_attr($custom_portfolio_link);?>"> </p>
        <p><input type="checkbox" id="custom_portfolio_target" name="custom_portfolio_target" <?php if($custom_portfolio_target) echo "checked"; ?> > <?php esc_attr_e('Open link in new tab','arilewp'); ?></p>
        <p><h4 class="heading"><?php esc_attr_e('Short Description','arilewp');?></h4>
        <p><textarea name="custom_portfolio_description" id="custom_portfolio_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="<?php esc_attr_e('Description','arilewp');?>"  rows="3" cols="10" ><?php if (!empty($custom_portfolio_short_description)) echo esc_attr($custom_portfolio_short_description);?></textarea></p>
        <p><h4 class="heading"><?php esc_attr_e('Single Description','arilewp');?></h4>
        <p><textarea name="custom_portfolio_single_description" id="custom_portfolio_single_description" style="width: 480px; height: 56px; padding: 0px;" placeholder="<?php esc_attr_e('Description','arilewp');?>"  rows="3" cols="10" ><?php if (!empty($custom_portfolio_single_description)) echo esc_attr($custom_portfolio_single_description);?></textarea></p>
<?php }

function child_project_meta_init()
{
    add_meta_box('home_project_meta', __('Project Details','arilewp'), 'arilewp_meta_for_portfolio', 'arilewp_portfolio', 'normal', 'high');
    add_meta_box('home_project_meta', __('Project Details','arilewp'), 'child_meta_for_portfolio', 'arilewp_portfolio', 'normal', 'high');
    add_meta_box('arilewp_page_slider', __('Show Slider on the Page','arilewp'), 'arilewp_page_slider_show', 'page', 'normal', 'high');

    add_action('save_post','child_save_meta_portfolio');
}
add_action('admin_init', 'child_project_meta_init');

function child_save_meta_portfolio($post_id)
{
    if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX) || isset($_REQUEST['bulk_edit']))
        return;

    if ( ! current_user_can( 'edit_page', $post_id ) )
    {   return ;	}

    if(isset( $_POST['post_ID']))
    {
        $post_ID = $_POST['post_ID'];
        $post_type=get_post_type($post_ID);


        if($post_type=='arilewp_portfolio')
        {

            update_post_meta($post_ID, 'custom_portfolio_link', sanitize_text_field($_POST['custom_portfolio_link']));
//            update_post_meta($post_ID, 'custom_portfolio_target', sanitize_text_field($_POST['custom_portfolio_target']));
            update_post_meta($post_ID, 'custom_portfolio_description', sanitize_text_field($_POST['custom_portfolio_description']));
            update_post_meta($post_ID, 'custom_portfolio_single_description', sanitize_text_field($_POST['custom_portfolio_single_description']));

        }

        elseif($post_type=='page')
        {
            update_post_meta($post_ID, 'page_slider_enable', sanitize_text_field(isset($_POST['page_slider_enable'])));

        }


    }
}