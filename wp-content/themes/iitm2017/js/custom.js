// Init FB Slider And Init Slider Carousel
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
			  {"fields":"posts.limit(5){full_picture,message}",  "access_token" : "EAAJz4ohejj0BAO5uuKbkimPDVVgrT3kXMSFHZBZAXxfxpZCcSOBkQIsbgtRl1wD8nuZAZBgsw7Ygh81slcKoakXqMrOW30WomKYH0tZC6sWFxd2us11ikNeG8mQIZAl0ISn5ymvXqQSHl5EjREZAmoZBDYV1VtqIz7WZCa3Uf5WLvstgZDZD"},
			  function(response) {
				  	var i = 0;
				  	console.log(response);
				  	function fbdata(x) {	
						for(i = 0; i< 5; i++){
							 var html ='<div class="owl-ite" data-url='+response.posts.data[i].full_picture+'><div class="item"><p>'+response.posts.data[i].message+'</p></div></div>';	
							 $('#owl-twitter').append(html);
							
						 }	
					}

					function start_fb_carousel(){
						$("#owl-twitter").owlCarousel({
							singleItem: true,
							slideSpeed: 300,
							addClassActive: true,
							navigation: false,
							pagination: false,
							autoPlay: 5000,
							afterMove: function(){
								
							$("#owl-twitter p").each (function () {
							  if ($(this).text().length > 120)
								$(this).text($(this).text().substring(0,120) + '...');
							});	
							
							$('#owl-twitter .owl-item').each(function(i){
								
								if($(this).is('.active')){
									var url = $(this).children().data('url');
									$('.twitter-outer').css({'background':'url('+url+')'})
								} 
							});	
								
								
								
							// var url= $('#owl-twitter').find('active').children().html();
							// console.log(url);	
							// $('.twitter-outer').css({'background':'url('+url+')'})
							}
					})
					}
				  
					$.when( fbdata() ).done(function() {
						   start_fb_carousel();
					});				  
			  })  
			  
		  };

		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));






