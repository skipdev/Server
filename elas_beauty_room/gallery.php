<!DOCTYPE HTML>
<html>
	<head>
		<title>Ela's Beauty Room</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<script src="juicebox_lite_1.5.0/web/jbcore/juicebox.js"></script>
		<style type="text/css" media="screen">
			.link-button{
				color:#8F3763;
				text-decoration: underline;
				cursor: pointer;
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
								<li class="current"><a href="gallery.php">Gallery</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>

				</div>

			<!-- Gallery -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

						<p align="center"><span id="button-1" class="link-button" >Manicures</span> | <span id="button-2" class="link-button">Nail Designs</span> | <span id="button-3" class="link-button">Pedicures</span> | <span id="button-4" class="link-button">Eyelashes</span> | <span id="button-5" class="link-button">Certificates</span> | <span id="button-6" class="link-button">Extra</span></p>

							<div id="juicebox-container" style="margin: 0 auto;"></div>

							<script>

							$(document).ready(function() {
								//load gallery 1
								loadGallery('juicebox_lite_1.5.0/web/gallery1/');
								//initialize top buttons
								$("#button-1").on("click", function(){loadGallery('juicebox_lite_1.5.0/web/gallery1/');});
								$("#button-2").on("click", function(){loadGallery('juicebox_lite_1.5.0/web/gallery2/');});
								$("#button-3").on("click", function(){loadGallery('juicebox_lite_1.5.0/web/gallery3/');});
								$("#button-4").on("click", function(){loadGallery('juicebox_lite_1.5.0/web/gallery4/');});
								$("#button-5").on("click", function(){loadGallery('juicebox_lite_1.5.0/web/gallery5/');});
								$("#button-6").on("click", function(){loadGallery('juicebox_lite_1.5.0/web/gallery6/');});
							});

							function loadGallery(base) {
								new juicebox({
									baseUrl : base,
									containerId : 'juicebox-container',
									backgroundColor : '222222',
									galleryWidth: '100%',
									galleryHeight: '95%',
								});
							}
							</script>

						</div>
					</div>
				</section>

			<br>
			<br>
                

			<!-- Facebook Code - Scripts -->
				<div id="fb-root"></div>
				<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);}
				(document, 'script', 'facebook-jssdk'));</script>

			<!-- Facebook Code -->
				
					<div class="container">
						<div class="row">
							<h3>Please give our page a like on Facebook!</h3>
							<section class="3u 6u(narrower) 12u$(mobilep)">
								<ul class="links">
									<div class="fb-like" align=center data-href="https://www.facebook.com/Elas-Beauty-Room-1520758974907394/?fref=ts" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
								</ul>
							</section>
						</div>
					</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>