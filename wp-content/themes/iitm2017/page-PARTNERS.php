<?php get_header(); ?>
<div id="partners">
			<!--/Start Partners-->
			<div class="partner-gallery">
				<div class="partners-heading">OUR <span>PARTNERS</span></div>
                    <div id="owl-partners" class="owl-carousel owl-theme">
                        <?php
                        $args = array( 'post_type' => 'partners','posts_per_page'=>50 );
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