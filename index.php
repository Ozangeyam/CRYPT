<?php 
$title = "Home";
require 'header.php'; ?>

	<!-- Hero section -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Your future is created by <br>investing <span>Wisely</span></h2>
					<h4>Join millions who've already discovered smarter investment platform like our community and earn yourself huge returns on CRYPTBITS.</h4>
					<form class="hero-subscribe-from">
						<!-- <input type="text" placeholder="Enter your email"> -->
						<a href="user/index" class="site-btn sb-gradients">Get Started</a>
					</form>
				</div>
				<div class="col-md-6">
					<img src="img/laptop.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<section class="ticker">
		<!-- Price Ticker Start -->
		
		<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,2010,52,74,5994,3718,5426,1831,6636,2,4195,5864,3513,3890,6892,4642,6719,1975,2416,3077,7083,2130,1772,7226,5488,6942,2900,6937,1518,7186,4256,2502,512,8916,328,3635,3717,2469,3155,1684,2273,2930,9566,1321,7278,3602,1274,5805,2135,6538,2634,6758,2499,1958,2011,2586,3945,109,1437,4066,1896,5161" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>

		<!-- Price Ticker End -->
	</section>


	<!-- Investments section -->
	<section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h1 style="font-weight: bolder;text-transform: uppercase;">Our Investment Plans</h1>
				<p>Choose how you want to invest with us!</p>
			</div>
		</div>
		<div class="team-members clearfix">
			
			<?php require 'plans.php'; ?>

		</div>
	</section>
	<!-- Investments section -->


	<!-- About section -->
	<section id="about" class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h1 style="font-weight: bolder;text-transform: uppercase;">About <?= $site_title ?></h1>
					<p>For almost a decade till date, we've helped thousands of individuals, groups of people, firms & companies to succeed on this path daily. We are Professional Traders and Portfolio Managers who return profits to investors, guaranteed and Regulated by the Securities and Exchange Commission. We offer Optimum trading service that is capable of delivering profit of up to 15% of invested funds every week. We trade on wide Range of Assets, Cryptos, Forex, Options & Commodities.</p>
					<a href="user/index" class="site-btn sb-gradients sbg-line mt-5">Get Started</a>
				</div>
			</div>
			<div class="about-img">
				<img src="img/about-img.png" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Features section -->
	<section class="features-section spad gradient-bg">
		<div class="container text-white">
			<div class="section-title text-center">
				<h2>Our Features</h2>
				<p>Crypto is the simplest way to exchange money at very low cost.</p>
			</div>
			<div class="row">
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-mobile"></i>
					<div class="feature-content">
						<h4>Responsive Interface</h4>
						<p>Our Platform is fully Functional and Responsive accross all Devices. </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-shield"></i>
					<div class="feature-content">
						<h4>Safe & Secure</h4>
						<p>All data transfer goes through 3 levels of encryption, and all server requests are validated before a response is sent to ensure user data are safe and secure. </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-wallet"></i>
					<div class="feature-content">
						<h4>Wallet</h4>
						<p>Dollar Wallet Support allows you to store limitless amount in Dollar, All Crypto Deposits are instantly converted to dollar, and converted and paid in crypto during withdrawals. </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-headphone-alt"></i>
					<div class="feature-content">
						<h4>Experts Support</h4>
						<p>Our Support team are indeed <strong>Burdened with Glorious Purpose</strong>. Available 24/7 to attend to your Complaints and ensure you enjoy the best of our Services. </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-reload"></i>
					<div class="feature-content">
						<h4>Instant Exchange</h4>
						<p>Value conversion on Deposits and withdrawals are fully automated, no contacts need to be made for transaction procession. </p>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-panel"></i>
					<div class="feature-content">
						<h4>Compensations</h4>
						<p>We compensate our users for any inconveniences encountered using our platform, and we try our best to zero the possibility of encountering issues. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- Process section -->
	<section class="process-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Get Started</h2>
				<p>Start Earning Crypto with our easy to use system. It’s fun, easy, and takes only a few minutes to set up an account! </p>
			</div>
			<div class="row">
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/1.png" alt="#">
						</figure>
						<h4>Create Your Wallet</h4>
						<p>Click on Get Started to open an Account with very simple steps. Ensure to set your Withdrawal Wallet Addresses before making a withdrawal. </p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/2.png" alt="#">
						</figure>
						<h4>Fund Your Wallet</h4>
						<p>Once Account is active, Make a Deposit of atleast $50. </p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/3.png" alt="#">
						</figure>
						<h4>Invest and Earn</h4>
						<p>Pick the Best Investment Option for you and Invest your suitable Amount and get daily Profits, multiple investments are supported. Duration range are Weekly, Monthly, and Yearly. Interest range from 5% to 100%. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Process section end -->


	<!-- Fact section -->
	<section class="fact-section gradient-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>20</h2>
						<p>Support <br> Countries</p>
						<i class="ti-basketball"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>10K</h2>
						<p>Transactions  <br> per hour</p>
						<i class="ti-panel"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>4B</h2>
						<p>Largest <br> Transactions</p>
						<i class="ti-stats-up"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>8</h2>
						<p>Years <br> of Experience</p>
						<i class="ti-user"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->


	<!-- Team section -->
	<section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Meet Our Team</h2>
				<p>Our experts in the field of crypto currency can always help you with any of your questions!</p>
			</div>
		</div>
		<div class="team-members clearfix">
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/1.jpg"></div>
					<h2>fliet Diniz</h2>
					<span>Financial Networks Manager</span>
				</div>
				<!-- <div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div> -->
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/1.jpg"></div>
					<div class="member-meta">
						<h2>Kaka Diniz</h2>
						<span>Financial Networks Manager</span>
					</div>
					<p>Tom Binegar is a full-time faculty member of the Financial Networks Division at <?= $site_title ?>.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/3.jpg"></div>
					<h2>Jackson Nash</h2>
					<span>CEO</span>
				</div>
				<!-- <div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div> -->
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/3.jpg"></div>
					<div class="member-meta">
						<h2>Jackson Nash</h2>
						<span>CEO</span>
					</div>
					<p>Jackson Nash is the Outstanding CEO and Lead Visionaire at <?= $site_title ?>.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/4.jpg"></div>
					<h2>Aaron Ballance</h2>
					<span>VP Enterprise Sales</span>
				</div>
				<!-- <div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div> -->
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/4.jpg"></div>
					<div class="member-meta">
						<h2>Aaron Ballance</h2>
						<span>VP Enterprise Sales</span>
					</div>
					<p>Aaron Ballance is a full-time faculty member of the Marketing and Sales Department at <?= $site_title ?>.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/5.jpg"></div>
					<h2>Melissa Barth</h2>
					<span>Legal Counsellor</span>
				</div>
				<!-- <div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div> -->
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/5.jpg"></div>
					<div class="member-meta">
						<h2>Melissa Barth</h2>
						<span>Legal Counsel</span>
					</div>
					<p>Melissa Barth is the Head of the Legal Counsel Department at <?= $site_title ?>.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/btc/devops.jpg"></div>
					<h2>Debrovsky Abrams</h2>
					<span>DevOps Engineer</span>
				</div>
				<!-- <div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div> -->
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/btc/devops.jpg"></div>
					<div class="member-meta">
						<h2>Debrovsky Abrams</h2>
						<span>DevOps Engineer</span>
					</div>
					<p>Debrovsky Adams is a full-time Technical Engineer and Develepment Manager at <?= $site_title ?>.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Team section -->


	<!-- Review section -->
	

	<!-- Review section end -->

<?php require 'footer.php'; ?>