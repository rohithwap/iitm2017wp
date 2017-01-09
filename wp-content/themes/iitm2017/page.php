
<?php get_header(); ?>
<!--/Page Content-->
			<div class="page-inner-content">
				<img class="page-inner-img" src="<?php echo get_template_directory_uri(); ?>/images/test6.jpg">
				<div class="section-heading"><h1><?php the_title(); ?></h1></div>
				<div class="page-inner-text">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
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