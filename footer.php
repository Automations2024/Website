<?php
/**
 * The footer for Arcturus Consulting Services
 */
?>

	<!-- End Main Body -->

	<!-- Start Footer -->
	<footer class="bg-dark text-light">
		<div class="container">
			<div class="f-items pt-4 pb-4">
				<div class="row">
					<div class="col-lg-4 col-md-6 item">
						<div class="f-item about">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/top/h/assets/img/logo-white.png" class="mb-4" alt="Logo">
							<h4 class="widget-title">Newsletters</h4>
							<p>Subscribe to our Updates</p>
							<form id="subscribe-news">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="emailid">
								<button type="button" id="subscribe-btn" onclick="Sendnewsletter(event)">
									<i class="arrow_right"></i>
								</button>
								<div id="email-validation" class="text-danger mt-2" style="display:none;">Email is invalid</div>
							</form>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 item">
						<div class="row">
							<div class="col-6">
								<div class="f-item link">
									<h4 class="widget-title">Quick Link</h4>
									<ul>
										<li>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fas fa-angle-right"></i> Home</a>
										</li>
										<li>
											<a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><i class="fas fa-angle-right"></i> About Us</a>
										</li>
										<li>
											<a href="<?php echo esc_url( home_url( '/oracle' ) ); ?>"><i class="fas fa-angle-right"></i> Services</a>
										</li>
										<li>
											<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><i class="fas fa-angle-right"></i> Blogs</a>
										</li>
										<li>
											<a href="<?php echo esc_url( home_url( '/privacy_policy' ) ); ?>"><i class="fas fa-angle-right"></i> Privacy Policy</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-6">
								<div class="f-item link">
									<h4 class="widget-title">Community</h4>
									<ul>
										<li>
											<a href="<?php echo esc_url( home_url( '/career' ) ); ?>"><i class="fas fa-angle-right"></i> Careers</a>
										</li>
										<li>
											<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><i class="fas fa-angle-right"></i> Contact Us</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 item">
						<div class="f-item contact-widget">
							<h4 class="widget-title">Contact Info</h4>
							<div class="address">
								<ul>
									<li>
										<div class="icon">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="content">
											<strong>Email:</strong>
											<a href="mailto:sales@arctrs.com">sales@arctrs.com</a>
										</div>
									</li>
									<li>
										<div class="icon">
											<i class="fas fa-phone"></i>
										</div>
										<div class="content">
											<strong>Phone:</strong>
											<a href="tel:+16138522801">+1 613-852-2801</a>
										</div>
									</li>
									<li>
										<div class="icon">
											<a href="https://www.linkedin.com/company/arcturus-consulting-services/" class="pin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
										</div>
										<div class="icon">
											<a href="https://www.instagram.com/arcturus_consulting_services/?hl=en" target="_blank" class="pin"><i class="fab fa-instagram"></i></a>
										</div>
										<div class="icon">
											<a href="https://www.facebook.com/people/Arcturus-Consulting-Services/61556302389519/" class="pin" target="_blank"><i class="fab fa-facebook-f"></i></a>
										</div>
										<div class="icon">
											<a href="https://twitter.com/arcturusconserv" class="pin" target="_blank"><i class="bi bi-twitter"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Start Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p>&copy; <?php echo date( 'Y' ); ?> Arcturus Consulting Services. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Bottom -->
	</footer>
	<!-- End Footer -->

</div><!-- .wrapper -->

<?php
wp_footer();
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
	function Sendnewsletter(event) {
		event.preventDefault();
		var formData = new FormData($('#subscribe-news')[0]);
		console.log(formData);
		var email = $('#emailid').val();

		function isValidEmail(email) {
			var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			return regex.test(email);
		}

		$('#email-validation').hide();
		if (!isValidEmail(email)) {
			$('#email-validation').show();
			return;
		}

		$.ajax({
			url: '<?php echo esc_url( home_url( '/Subscribe' ) ); ?>',
			method: 'POST',
			data: formData,
			contentType: false,
			processData: false,
			dataType: 'json',
			success: function(response) {
				console.log(response);
				if (response.status == 400) {
					toastr.success(response.message);
				} else if (response.status == 201) {
					toastr.success('Thank you for subscribing to our newsletter!');
				} else {
					toastr.error(response.message);
				}
			},
			error: function(xhr, status, error) {
				console.error('API call error:', error);
				toastr.error('Failed to subscribe. Please try again later.');
			}
		});
	}

	$(document).ready(function() {
		var successMessage = sessionStorage.getItem('careerFormSuccessMessage');
		var errorMessage = sessionStorage.getItem('careerFormErrorMessage');
		if (successMessage) {
			toastr.success(successMessage);
			sessionStorage.removeItem('careerFormSuccessMessage');
		}
		if (errorMessage) {
			toastr.error(errorMessage);
			sessionStorage.removeItem('careerFormErrorMessage');
		}
	});
</script>

</body>
</html>
