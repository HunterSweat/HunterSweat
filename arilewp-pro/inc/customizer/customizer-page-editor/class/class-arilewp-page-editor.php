<?php
/** 
 * Page editor control
 *
 * @package arilewp
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

/**
 * Class to create a custom tags control
 */
class ArileWP_Page_Editor extends WP_Customize_Control {

	/**
	 * Flag to include sync scripts if needed
	 *
	 * @var bool|mixed
	 */
	private $needsync = false;

	/**
	 * ArileWP_Page_Editor constructor.
	 *
	 * @param WP_Customize_Manager $manager Manager.
	 * @param string               $id Id.
	 * @param array                $args Constructor args.
	 */
	public function __construct( $manager, $id, $args = array() ) {
		parent::__construct( $manager, $id, $args );
		if ( ! empty( $args['needsync'] ) ) {
			$this->needsync = $args['needsync'];
		}
	}

	/**
	 * Enqueue scripts
	 *
	 * @since   1.1.0
	 * @access  public
	 * @updated Changed wp_enqueue_scripts order and dependencies.
	 */
	public function enqueue() {
		wp_enqueue_style( 'arilewp_text_editor_css', ARILEWP_PARENT_INC_URI . '/customizer/customizer-page-editor/css/arilewp-page-editor.css', array(), 999 );
		wp_enqueue_script(
			'arilewp_text_editor', ARILEWP_PARENT_INC_URI . '/customizer/customizer-page-editor/js/arilewp-text-editor.js', array(
				'jquery',
				'customize-preview',
			), 999, true
		);
		if ( $this->needsync === true ) {
			wp_enqueue_script( 'arilewp_controls_script', ARILEWP_PARENT_INC_URI . '/customizer/customizer-page-editor/js/arilewp-update-controls.js', array( 'jquery', 'arilewp_text_editor' ), 999, true );
			wp_localize_script(
				'arilewp_controls_script', 'requestpost', array(
					'ajaxurl'           => admin_url( 'admin-ajax.php' ),
					'thumbnail_control' => 'arilewp_feature_thumbnail', // name of image control that needs sync
					'editor_control'    => 'arilewp_page_editor', // name of control (theme_mod) that needs sync
					'thumbnail_label'   => esc_html__( 'About background', 'arilewp' ), // name of thumbnail control
				)
			);
		}
	}

	/**
	 * Render the content on the theme customizer page
	 */
	public function render_content() {
		?>
		<label>
			<?php if ( ! empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php endif; ?>
			<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea( $this->value() ); ?>" id="<?php echo esc_attr( $this->id ); ?>" class="editorfield">
			<a onclick="javascript:WPEditorWidget.toggleEditor('<?php echo esc_attr($this->id); ?>');" class="button edit-content-button"><?php _e( '(Edit)', 'arilewp' ); ?></a>
		</label>
		<?php
	}
}
