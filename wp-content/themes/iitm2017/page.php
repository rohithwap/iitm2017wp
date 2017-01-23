<?php
/*
Template Name: Page
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
$imageid = get_post_meta( get_the_ID(), 'feature-image', true );
$imageurl = wp_get_attachment_url($imageid);
?>
<!--/Page Content-->
			<div class="page-inner-content">
                <?php if ( $imageid ) : ?>
				<img class="page-inner-img" src="<?php echo $imageurl; ?>">
                <?php endif; ?>
				<div class="section-heading"><h2><?php the_title(); ?></h2></div>
				<div class="page-inner-text">
					<?php
						the_content();
						endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				</div>
				
				<!--/Blog-->
				
				<?php if ( is_active_sidebar( 'widget-sidebar' ) ) : ?>
					<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-sidebar' ); ?>
					</div>
				<?php endif; ?>
				
			</div>
			<!--/End Page Content-->		
		
<?php get_footer(); ?>