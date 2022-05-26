<?php 
$title = "Contact Us";
require 'header.php'; 


?>


	<!-- Page info section -->
	<section class="page-info-section">
		<div class="container">
			<h2>Contact Us</h2>
			<div class="site-beradcamb">
				<a href="">Home</a>
				<span><i class="fa fa-angle-right"></i> Contact us</span>
			</div>
		</div>
	</section>
	<!-- Page info end -->



	<!-- Contact section -->
	<section class="contact-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					
					<form class="contact-form" action="process_mail" method="get">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input name="name" required class="check-form" type="text" placeholder="Full Name*:">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="subject" required class="check-form" type="text" placeholder="Subject*:">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="email" required class="check-form" type="email" placeholder="Email Adress*:">
									<span><i class="ti-check"></i></span>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="body" required style="resize: none;" placeholder="Tell us about your question!"></textarea>
								</div>
								

								<input type="submit" name="submit" value="Send" class="site-btn sb-gradients mt-4">
							</div>
						</div>
					</form>
				</div>
				
				<div class="col-lg-5 mt-5 mt-lg-0">
					<div>
						<h4>Phone: <a href="tel:+447401167322">+44 7401167322</a></h4><br>
						<h4>Email: <a href="mailto:support@Cryptbits.trade">support@cryptbits.trade</a></h4><br>
						<h4>Office Address: PL30 4QR Hellandbridge, Bodmin, UK</h4><br>
					</div>
					<!--<div class="map" id="map-canvas">
					<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Bodmin%20PL30%204QR,%20UK+(Uprising%20Investment%20)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/">Easy radius map</a> </div>
					</div>-->
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->


	


<?php require 'footer.php'; ?>