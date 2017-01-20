<?php get_header(); ?>
<!--/Page Content-->
			<div class="section-heading-blog"><div><h1>IITM Blog</h1></div></div>
			<div class="page-inner-content">
				<div class="blog-widget">					
					<div class="row margin-top-ten">
                         <?php
							$args = array( 'post_type' => 'post');
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							$imageid = get_post_meta( get_the_ID(), 'featured_image', true );
  							$imageurl = wp_get_attachment_url($imageid);
							?>
						<div class="col s12 m4 l4 single-blog-holder">	
							<div class="blog-border">
							<div class="blog-img-holder">
								<img src="<?php echo $imageurl; ?>">
								<div class="blog-image-overlay"><i class="fa fa-search"></i></div>
							</div>
							<div class="blog-date"><?php the_time('F jS, Y g:i a'); ?></div>
							<div class="blog-title"><h5><?php echo $post->post_title; ?></h5>
							<p><?php echo $post->post_excerpt; ?></p></div>
							</div>                        
						</div>
                        <?php  
							endwhile;					
						?>
					</div>				
                </div>
			</div>
			<!--/End Page Content-->
			
			<div id="partners">
			<!--/Start Partners-->
			<div class="partner-gallery">
				<div class="partners-heading">OUR <span>PARTNERS</span></div>
                    <div id="owl-partners" class="owl-carousel owl-theme">
                        <?php
                        $args = array( 'post_type' => 'partners' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        $imageid = get_post_meta( get_the_ID(), 'partner_logo', true );
                        $imageurl = wp_get_attachment_url($imageid);
                        
                        ?>
                        <div class="item">
                            <div class="logo"><img src="<?php echo $imageurl; ?>"></div>
                        </div>
                        <?php  
                        endwhile;					
                        ?>
                    </div>
			</div>
		</div>
			<?php get_footer(); ?>