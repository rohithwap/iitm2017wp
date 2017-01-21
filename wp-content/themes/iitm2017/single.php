/*
Template Name: Single Post
*/
<?php get_header(); ?>

<!--/Page Content-->
			<!--/Page Content-->
			<div class="page-inner-content">
				<?php 
				while ( have_posts() ) : the_post(); 
				$imageid = get_post_meta( get_the_ID(), 'featured_image', true );
                $imageurl = wp_get_attachment_url($imageid);						
				?>
                
				<div class="blog-single-headder">
					<div class="row blog-title-row">
						<div class="col s12 m3 l3 blog-name">
							Blog
						</div>
						<div class="col s12 m9 l9 blog-title-custom">
                            <?php echo $post->post_title; ?><br>							
						</div>
					</div>					
				</div>
				<img width="100%" src="<?php echo $imageurl; ?>">
				<div class="blog-date-inner"><?php the_date(); ?></div>
				<div class="page-inner-text">  
					<p><?php echo the_content(); ?></p>
				</div>
               	<?php  
                endwhile;					
                ?>				
				
				<div class="blog-social">
					<div class="blog-fb"><img src="images/fb.png"></div>
					<div class="blog-twitter"><img src="images/twitter.png"></div>
				</div>
				
				
				
			<!--/End Page Content-->
			<?php if ( is_active_sidebar( 'widget-sidebar' ) ) : ?>
					<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-sidebar' ); ?>
					</div>
			<?php endif; ?>
			
			<?php get_footer(); ?>