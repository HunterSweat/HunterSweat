<?php
/**
 * Customize Editor control class.
 *
 * @package arilewp
 *
 * @see     WP_Customize_Control
 * @access  public
 */
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;
/**
 * Class ArileWP_Customize_Taxonomy_Control
 */
class ArileWP_Customize_Taxonomy_Control extends WP_Customize_Control
{
	private $options = false;

    public function __construct($manager, $id, $args = array(), $options = array())
    {
        $this->options = $options;

        parent::__construct( $manager, $id, $args );
    }

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */
	 
	public function render_content()
    {
        add_action( 'wp_dropdown_cats', array( $this, 'wp_dropdown_cats' ) );

		$this->defaults = array(
			'show_option_none' => __( 'None','appointment' ),
			'orderby'          => 'name',
			'hide_empty'       => 0,
			'id'               => $this->id,
			'selected'         => $this->value(),
			'taxonomy'		   => 'portfolio_categories'
		);

		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php wp_dropdown_categories(Array ( 'show_option_none' => 'None','orderby' => 'name', 'hide_empty'=> 0 ,'id' => 'tax_project', 'taxonomy'=> 'portfolio_categories' )); ?>
		</label>
		<?php
	}
 
	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
    public function wp_dropdown_cats( $output )
    {
	   
	  $output = str_replace( '<select', '<select multiple ' . $this->get_link(), $output );
	  return $output;
    }
}
?>