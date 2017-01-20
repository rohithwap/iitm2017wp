<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php require_once('functions.php'); ?>		
		<?php wp_head(); ?> 
	</head>
	
	<body>	
		<div class="container-fluid">
				<div class="">
					<div class="col s12 m12 l12 blue">
						<div class="top-header">
							<div class="col s12 m4 l4 blue" id="logo">
								<div class="logo-outer blue">
									<div class="logo-inner">
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
									</div>
								</div>	
							</div>
							<div class="col s12 m4 l4" id="social">
								<div class="social-outer black">
									<div class="social-inner">
										<img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/fb.png">
										<img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/twitter.png">
										<img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png">
										<img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/images/instagram.png">
									</div>
								</div>
							</div>
							<div class="col s12 m4 l4 yellow" id="contacts">
								<div class="contacts-outer yellow">
									<div class="contacts-inner">
										<div class="contact-text">
											+91-80-40834100<br>
											info@iitmindia.com
                                        </div>  
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<div>
				<?php if ( function_exists('max_mega_menu_is_enabled') && max_mega_menu_is_enabled('header-menu') ) : ?>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
				<?php else: ?>
							<nav><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
				<?php endif; ?>					
			</div>			