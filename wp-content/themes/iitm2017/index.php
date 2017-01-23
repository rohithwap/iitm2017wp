<?php get_header(); ?>
<div class="gallery-container">
			<!--Gallery Starts -->

			<!-- Gallery ITEMS - OWL -->
			<div id="owl-gallery-container">
				<div class="nav-control">
					<!--/Custom Nav:: Issues With Responsiveness-->
					<!-- div class="nav-prev-cust"></div>
					<div class="nav-next-cust"></div -->
				</div>
				<div id="owl-gallery" class="owl-carousel owl-theme">
<?php
$args = array( 'post_type' => 'iitm_slider',
 'posts_per_page' => 5 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();   
  $imageid = get_post_meta( get_the_ID(), 'slider_image', true );
  $imageurl = wp_get_attachment_url($imageid);
  $sliderlink = get_post_meta( get_the_ID(), 'home_slider_link', true);					
  ?>
  <div class="item">
		<div class="gallery-outer">
			<div class="gal-image">
				<a class="slider-link" href="<?php echo $sliderlink; ?>">
					<img src="<?php echo $imageurl; ?>">
				</a>	
			</div>';?>
			<div class="gal-image-text">
				<a class="slider-link" href="<?php echo $sliderlink; ?>"><h5><?php echo the_title(); ?></h5></a>
				<p><?php echo the_content(); ?></p>
			</div>
		</div>
	</div>
<?php  
endwhile;					
?>


					
	
		
					
					
				</div>
			</div>
			<!-- END Gallery ITEMS -->

			<div class="twitter-outer">				
				<!--Tweet Carousel -->
				<div id="owl-twitter" class="owl-carousel owl-theme">
					
					
				</div>
				<!--End Tweet Carousel -->
			</div>

		</div>
		<!-- Gallery Ends -->

		<div id="main-text-home">
			<div class="container-wide">
				<div class="row no-bottom-margin">
					<div class="col s12 m12 l9">
						<div class="main-text-home-header">MEET - NETWORK - CONTRACT</div>
						<div class="main-sub-text">
							IITM is a leading platform for the travel industry to showcase existing products and introduce new ones to audiences across the country. If your looking to meet with travel industry executives, contract or just simply book a holiday, IITM is the place to do it.
						</div>
					</div>
					<div class="col s12 m12 l3">
						<div class="main-text-home-right yellow">
							<div id="quick-fact">Quick Fact</div>
							<?php
							$args = array( 'post_type' => 'quickfact', 'orderby'=>'rand', 'posts_per_page' => 1 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							?>
							<div class="quick-fact-content">
								<?php echo the_content(); ?>
							</div>
							<?php  
							endwhile;					
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="register">
			<div class="container-wide">
				<div class="row">
					<div class="col s12 m12 l7">
						<div id="owl-blog" class="owl-carousel owl-theme">
							<!-- Items Start -->
							<?php
							$args = array( 'post_type' => 'post', 'posts_per_page' => 5 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							$imageid = get_post_meta( get_the_ID(), 'featured_image', true );
  							$imageurl = wp_get_attachment_url($imageid);
							?>	
							<div class="item">
								<img src="<?php echo $imageurl; ?>">
								<div class="register-sub-content">
									<div class="col s12 m9 l9">
										<div class="register-sub-content-text">
											<h5><?php echo $post->post_title; ?></h5>
											<p><?php echo $post->post_excerpt; ?></p>
										</div>
									</div>
									<div class="col s12 m3 l3">
										<div class="link-holder">
											<a class="register-sub-content-link" href="<?php echo get_permalink(); ?>"> 
											Read More</a>
										</div>
									</div>
								</div>
							</div>
							<?php  
							endwhile;					
							?>

							<!-- Items End-->
						</div>
					</div>

					<div class="col s12 m12 l3 offset-l2">
						<div class="reg-links">
							<div class="button-container">
								<a href="#" class="reg-link">Trade Registration</a>
								<a href="#" class="reg-link">General Registration</a>
								<a href="#" class="reg-link">Media Registration</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="dates">
			<div class="nav-dates">
				<div id="nav-dates-button">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<div id="nav-dates-container">
					<div class="row">
						<h2 class="event-dates-header">Event Dates</h2>
						<!--/ Start All  Date Items /-->
						<div class="col s12 m12 l12">
							<!--/ Left /-->

							<?php
							$args = array( 
								'post_type' => 'eventdates', 
								'posts_per_page' => 8,
								'meta_key'			=> 'start_date',
								'orderby'			=> 'meta_value',
								'order'				=> 'ASC'
							);
							$i=1;
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							$city = get_post_meta( get_the_ID(), 'city', true );
							$reportlink = get_post_meta( get_the_ID(), 'report_link', true );
							$sdt = get_post_meta( get_the_ID(), 'start_date', true );
							$start_date = DateTime::createFromFormat('Y-m-d', $sdt);
							$start_date_format = $start_date->format('d');
							$edt = get_post_meta( get_the_ID(), 'end_date', true );
							$end_date = DateTime::createFromFormat('Y-m-d', $edt);
							$end_date_format = $end_date->format('d F Y');
							$imageid = get_post_meta( get_the_ID(), 'city_image', true );
  							$imageurl = wp_get_attachment_url($imageid);
							$now = new DateTime();
							$now->format('Y-m-d');
							$i;							
							if($now > $start_date){
								$html='
								<div class="col s12 m3 l3 no-padding">
									<a class="date-item-booking-open" 
									href="#">Booking Closed</a>
									<a target="_blank" class="view-report" href='.$reportlink.'>View Report</a>
								</div>
								';
							} else{
								$html='
								<div class="col s12 m3 l3 no-padding">
									<a class="date-item-booking-open" href="#">Booking Open</a>
									<a class="date-item-exhibit" href="#">Exhibit</a>
								</div>
								';
							}
							?>	
							<!--/ Item /-->
							<div class="date-item">
								<div class="row no-margin">
									<div class="col s12 m3 l3 no-padding">
										<img src="<?php echo $imageurl; ?>"></div>
									<div class="col s12 m6 l6">
										<div class="date-item-city-name">
											IITM <?php echo $city; ?>
										</div>
										<div class="date-item-city-date">
											<?php echo $start_date_format; ?> - <?php echo $end_date_format; ?>
										</div>
										<div class="date-item-city-venue">
											<?php echo the_content(); ?>
										</div>
									</div>
									<?php echo $html; ?>
								</div>
							</div>
							<!--/ End Item /-->	
							<?php
							endwhile;	
							$i++;
							?>

						
						</div>
					</div>
					<!--/ End All Date Items /-->
				</div>
			</div>
			<div id="dates-slider">
				<div id="owl-dates" class="owl-carousel owl-theme">
					<!-- #Start Items -->
                    <?php
                    $args = array( 'post_type' => 'eventdates', 'posts_per_page' => 5 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $city = get_post_meta( get_the_ID(), 'city', true );
                    $sdt = get_post_meta( get_the_ID(), 'start_date', true );
                    $start_date = DateTime::createFromFormat('Y-m-d', $sdt);
                    $start_date_format = $start_date->format('d');
                    $edt = get_post_meta( get_the_ID(), 'end_date', true );
                    $end_date = DateTime::createFromFormat('Y-m-d', $edt);
                    $end_date_format = $end_date->format('d F Y');
                    $imageid = get_post_meta( get_the_ID(), 'city_image', true );
                    $imageurl = wp_get_attachment_url($imageid);
                    ?>	
                    
					<div class="item">
						<div class="city-image" data-bg="<?php echo $imageurl; ?>">
							<img class="date-img">
						</div>
						<div class="row slider-box">
							<div class="col s12 m12 l12 yellow city-name">
								<?php echo $city; ?>
							</div>
							<div class="col s12 m12 l12">
								<div class="date-text"><?php echo $start_date_format; ?> - <?php echo $end_date_format; ?></div>
								<div class="venue-text"><?php echo the_content(); ?></div>
							</div>
						</div>
					</div>
                    <?php
                    endwhile;	
                    $i++;
                    ?>
                </div>
			</div>
		</div>
		<!--/ End Dates-->

		<div id="reports">
			<!--/Start Reports-->
			<div class="reports-container">
				<div id="reports-bg">REPORTS</div>
				<div id="reports-heading">
					<div id="event-heading-one">Event</div>
					<div id="event-heading-two">Reports</div>
				</div>
				<div class="reports-gallery">
					<div id="owl-reports" class="owl-carousel owl-theme">
						<!-- Items Start -->
                        <?php
                        $i=1;
                        $args = array( 'post_type' => 'eventreports', 'posts_per_page' => 5 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                        $city = get_post_meta( get_the_ID(), 'city', true );
                        $series = get_post_meta( get_the_ID(), 'series', true );
                        $reportpdf = get_post_meta( get_the_ID(), 'report_pdf', true );
                        $reporturl = wp_get_attachment_url($reportpdf);
                        ?>

						<!--/ Item -->
						<div class="item">
							<div class="report-single-container">
								<div class="report-number"><?php echo $i; ?></div>
								<div class="report-link">
									<div class="report-link-inner">
										<a href="<?php echo $reporturl; ?>" target="_blank"><i class="fa fa-plus"></i></a>
									</div>
								</div>
								<div class="report-info">
									<div class="report-city"><?php echo $city; ?></div>
									<div class="report-date"><?php echo $series; ?></div>
								</div>
							</div>
						</div>
                        <?php  
                        $i++;
                        endwhile;	
                        
                        ?>
						<!--/ End Item -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Reports-->

		<div id="partners">
			<!--/Start Partners-->
			<div class="partner-gallery">
				<div class="partners-heading">OUR <span>PARTNERS</span></div>
                    <div id="owl-partners" class="owl-carousel owl-theme">
                        <?php
                        $args = array( 'post_type' => 'partners','posts_per_page' => 50);
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