<?php

/*
Plugin Name: Partners Widget
Description: Partners Widget for iitmindia.com
*/
/* Start Adding Functions Below this Line */

// Creating the widget 
class iitm_partner_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'iitm_partner_widget', 

// Widget name will appear in UI
__('IITM Partners Widget', 'iitm_partner_widget_domain'), 

// Widget description
array( 'description' => __( 'Add a widget for blog posts', 'iitm_partner_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )


// This is where you run the code and display the output


$args = array( 'post_type' => 'partners');
$loop = new WP_Query( $args );


echo '
<div id="partners"> <!--/Start Partners-->
<div class="partner-gallery-page">
	<div class="section-heading"><h2>Our Partners</h2></div>
	<div id="owl-partners" class="owl-carousel owl-theme">
';	
	
while ( $loop->have_posts() ) : $loop->the_post();
$imageid = get_post_meta( get_the_ID(), 'partner_logo', true );
$imageurl = wp_get_attachment_url($imageid);
echo '

	<div class="item">
		<div class="logo"><img src="'.$imageurl.'"></div>
	</div>
		
';
	
	
	
endwhile;					

	echo '
	</div>	
	</div>
</div>
	';	
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'iitm_partner_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class iitm_partner_widget ends here

// Register and load the widget
function iitm_load_partner_widget() {
	register_widget( 'iitm_partner_widget' );
}
add_action( 'widgets_init', 'iitm_load_partner_widget' );
/* Stop Adding Functions Below this Line */

?>