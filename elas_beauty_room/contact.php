<!DOCTYPE HTML>
<html>
	<head>
		<title>Ela's Beauty Room</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<style>
			#map {
				width: 100%;
				height: 400px;
				background-color: grey;
			  }
			html,body
				{
					overflow-x: hidden; 
				}
		</style>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<div id=bigscreenlogo>
							<id="logo"><img src = "images/logo1.png" width="50%" height="20%";></a>
						</div>
						<div id=smallscreenlogo>
							<h1><a href="/" id="logo"><em>Ela's Beauty Room</em></a></h1>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="/">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="services.php">Services</a></li>
								<li><a href="book.php">Book</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li class="current"><a href="contact.php">Contact</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="4u 12u(narrower)">
								<div id="sidebar">

									<!-- Sidebar -->
										<header>
												<h2>Contact Us</h2>
												<p>Please get in touch!</p>
											</header>
											
											<p>149 Green St, Eastbourne BN21 1SB</p>
											<p>07960 088568</p>
											<p>elasbeautyroom@gmail.com</p>
											<div class='mobilebr'>
												<br>
											</div>
										
										<section>
											<script>
											  window.fbAsyncInit = function() {
												FB.init({
												  appId      : '95100348886',
												  xfbml      : true,
												  version    : 'v2.6'
												});
											  };

											  (function(d, s, id){
												var js, fjs = d.getElementsByTagName(s)[0];
												if (d.getElementById(id)) {return;}
												js = d.createElement(s); js.id = id;
												js.src = "//connect.facebook.net/en_US/sdk.js";
												fjs.parentNode.insertBefore(js, fjs);
											  }(document, 'script', 'facebook-jssdk'));
											</script>

											<div class="fb-page" 
												 data-href="https://www.facebook.com/1520758974907394/" 
												 data-tabs="messages" 
												 data-width="400" 
												 data-height="300" 
												 data-small-header="true">
											  <div class="fb-xfbml-parse-ignore">
												<blockquote></blockquote>
											  </div>
											</div>
										 </section>
										 <div class='mobilebr'>
												<br>
											</div>

								</div>
							</div>
							
							<div class="8u  12u(narrower) important(narrower)">
								<div id="content">

									<!-- Content -->

										<article>
											<h3>Google Maps Location</h3>
											
											<div id="map"></div>
											<script>
											  function initMap() {
												var uluru = {lat: 50.777286, lng: 0.2559018};
												var map = new google.maps.Map(document.getElementById('map'), {
												  zoom: 18,
												  center: uluru
												});
												var marker = new google.maps.Marker({
												  position: uluru,
												  map: map
												});
											  }
											</script>
											<script async defer
											src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCi1oFBdJPS95SzvemwWxL_dK5uWEu_n6w&callback=initMap">
											</script>
	
												<div id="hidecontactfb">
												<br>
												<br>
												<br>
													<div class="container">
														<div class="row">
															<section class="3u 6u(narrower) 12u$(mobilep)">
																<ul class="links">
																	<div class="fb-like" align=center data-href="https://www.facebook.com/Elas-Beauty-Room-1520758974907394/?fref=ts" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
																</ul>
															</section>
														</div>
													</div>
												</div>
										</article>

								</div>
							</div>
						</div>
					</div>
				</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>