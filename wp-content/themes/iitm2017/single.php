<?php get_header(); ?>
<!--/Page Content-->
			<!--/Page Content-->
			<div class="page-inner-content">
                <?php
                $args = array( 'post_type' => 'post' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
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
							<?php echo $post->post_excerpt; ?>
						</div>
					</div>					
				</div>
				<img src="<?php echo $imageurl; ?>">
				<div class="blog-date-inner">12 January 2017</div>
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
				
				<div class="blog-widget">
					<div class="section-heading"><h2>Latest From The Blog</h2></div>
					<div class="row margin-top-ten">
						<div class="col s12 m4 l4 single-blog-holder">
							<div class="blog-border">
							<div class="blog-img-holder">
								<img src="images/test7.jpg">
								<div class="blog-image-overlay"><i class="fa fa-search"></i></div>
							</div>
							<div class="blog-date">26 January 2017</div>
							<div class="blog-title">The importance and success of IITM The importance and success of IITM</div>
							</div>
						</div>
						<div class="col s12 m4 l4 single-blog-holder">
							<div class="blog-border">
							<div class="blog-img-holder">
								<img src="images/test7.jpg">
								<div class="blog-image-overlay"><i class="fa fa-search"></i></div>
							</div>
							<div class="blog-date">26 January 2017</div>
							<div class="blog-title">The importance and success of IITM The importance and success of IITM</div>
							</div>
						</div>
						<div class="col s12 m4 l4 single-blog-holder">
							<div class="blog-border">
							<div class="blog-img-holder">
								<img src="images/test7.jpg">
								<div class="blog-image-overlay"><i class="fa fa-search"></i></div>
							</div>
							<div class="blog-date">26 January 2017</div>
							<div class="blog-title">The importance and success of IITM The importance and success of IITM</div>
							</div>
						</div>
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