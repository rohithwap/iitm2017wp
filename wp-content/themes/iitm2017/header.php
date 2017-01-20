<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php require_once('functions.php'); ?>		
		<?php wp_head(); ?> 
	</head>
	
	<body>	
		<script>
		  window.fbAsyncInit = function() {
			FB.init({
			  appId      : '690366741122621',
			  xfbml      : true,
			  version    : 'v2.8'
			});
			FB.AppEvents.logPageView();
			
			FB.api(
			  '/764349200272874',
			  'GET',
			  {"fields":"posts.limit(5)",  "access_token" : "EAAJz4ohejj0BAO5uuKbkimPDVVgrT3kXMSFHZBZAXxfxpZCcSOBkQIsbgtRl1wD8nuZAZBgsw7Ygh81slcKoakXqMrOW30WomKYH0tZC6sWFxd2us11ikNeG8mQIZAl0ISn5ymvXqQSHl5EjREZAmoZBDYV1VtqIz7WZCa3Uf5WLvstgZDZD"},
			  function(response) {
				 //console.log(response);
				 for(var i = 0; i< 5; i++){
					 var html ='<div class="owl-item"><div class="item"><p>'+response.posts.data[i].message+'</p></div></div>';	
					 $('#owl-twitter > .owl-wrapper-outer > .owl-wrapper').append(html);
					 $("#owl-twitter").owlCarousel({
							singleItem: true,
							slideSpeed: 300,
							navigation: false,
							pagination: false,
							autoPlay: 5000
					});
				 }	
				  
			  })  
			  
		  };

		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
			
		</script>
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