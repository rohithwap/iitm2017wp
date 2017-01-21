<?php

/*
Plugin Name: Blog Widget
Description: Blog Widget for iitmindia.com
*/
/* Start Adding Functions Below this Line */

// Creating the widget 
class iitm_blog_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'iitm_blog_widget', 

// Widget name will appear in UI
__('IITM Blog Widget', 'iitm_blog_widget_domain'), 

// Widget description
array( 'description' => __( 'Add a widget for blog posts', 'iitm_blog_widget_domain' ), ) 
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


$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
$loop = new WP_Query( $args );

echo '
<div class="blog-widget">
<div class="section-heading"><h2>'.$title.'</h2></div>
<div class="row margin-top-five">
';	
	
while ( $loop->have_posts() ) : $loop->the_post();
$imageid = get_post_meta( get_the_ID(), 'featured_image', true );
$imageurl = wp_get_attachment_url($imageid);
$title = get_the_title();
$link = get_the_permalink();	

echo '
			<div class="col s12 m4 l4 single-blog-holder">
				<div class="blog-border">
				<div class="blog-img-holder">
					<img src="'.$imageurl.'">
					<div class="blog-image-overlay"><a class="blog-link" href="'.$link.'"><i class="fa fa-search"></i></a></div>
				</div>
				<div class="blog-date">26 January 2017</div>
				<div class="blog-title">'.$title.'</div>
				</div>
			</div>
		
';
	
	
	
endwhile;					

	echo '
	</div>	
	</div><!--/End Blog-->
	';	
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'iitm_blog_widget_domain' );
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
} // Class iitm_blog_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'iitm_blog_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );




/* Stop Adding Functions Below this Line */
?>