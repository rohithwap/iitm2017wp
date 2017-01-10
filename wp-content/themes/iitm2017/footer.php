<div class="footer">
			<!--/Start Footer-->
			<div class="address">
				<p>
					India International Travel Mart,
					<br> Sphere Travelmedia &amp; Exhibitions Pvt. Ltd.,
					<br> # 245, Amar Jyothi Layout, Domlur, Bangalore - 560 071. India
					<br> Tel: 91-80-40834100 | Fax: 91 – 80 – 40834101
				</p>
			</div>
			<div class="subscribe">
				<div class="subscribe-inner">
					<h5>Join Our Mailing List</h5>
					<div class="form-subscribe">
						<input type="email" name="email" id="email">
						<button id="btn-subscribe">GO</button>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!--End Main Container-->

	<?php wp_footer(); ?>
	<script>
		$("#owl-partners").owlCarousel({
			singleItem: false,
			slideSpeed: 300,
			pagination: false,
			autoPlay: 1000,
			transitionStyle: "fade",
			navigation: false, // Show next and prev buttons
			items: 6,
			slideBy: 1,
		});
		$("#owl-reports").owlCarousel({
			singleItem: false,
			slideSpeed: 300,
			pagination: true,
			//autoPlay: 3000,
			transitionStyle: "fade",
			navigation: false, // Show next and prev buttons
			items: 3,
			slideBy: 1,
		});
		$("#owl-dates").owlCarousel({
			singleItem: true,
			slideSpeed: 300,
			pagination: false,
			autoPlay: 5000,
			transitionStyle: "fade",
			navigation: true, // Show next and prev buttons
			navigationText: ["<img src='<?php echo get_template_directory_uri(); ?>/images/left.png'>", "<img src='<?php echo get_template_directory_uri(); ?>/images/right.png'>"],
			mouseDrag: false,
			touchDrag: false,
		});
		$("#owl-twitter").owlCarousel({
			singleItem: true,
			slideSpeed: 300,
			navigation: false,
			pagination: false,
			autoPlay: 5000
		});
		$("#owl-gallery").owlCarousel({
			navigation: true, // Show next and prev buttons
			slideSpeed: 200,
			paginationSpeed: 400,
			singleItem: true,
			transitionStyle: "fade",
			autoPlay: 3000,
			pagination: false,
			navigationText: ["<img src='<?php echo get_template_directory_uri(); ?>/images/left.png'>", "<img src='<?php echo get_template_directory_uri(); ?>/images/right.png'>"],
			mouseDrag: false,
			touchDrag: false,

			// "singleItem:true" is a shortcut for:
			// items : 1, 
			// itemsDesktop : false,
			// itemsDesktopSmall : false,
			// itemsTablet: false,
			// itemsMobile : false

		});

		$("#owl-blog").owlCarousel({
			singleItem: true,
			slideSpeed: 300,
			navigation: true,
			pagination: false,
			autoPlay: 1000,
			navigationText: ["<img class='blog-nav' src='<?php echo get_template_directory_uri(); ?>/images/left.png'>", "<img class='blog-nav' src='<?php echo get_template_directory_uri(); ?>/images/right.png'>"]
		});

		$(document).ready(function () {

			// Add Bg to date slider
			$(".city-image").each(function () {
				var bg = $(this).data('bg');
				$(this).css({
					'background': 'url(' + bg + ')'
				});
			});


			// Toggle Dates				
			$('#nav-dates-button').on('click', function () {
				$('#nav-dates-container').toggleClass('date-shown');
				$('#nav-dates-button > i').toggleClass('fa-bars fa-close');
				$('.date-item').hide();
				$(".date-item").each(function (i) {
					$(this).delay((i + 1) * 100).fadeIn();
				});
			})


		})
	</script>	
</body>

</html>