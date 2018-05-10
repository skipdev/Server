<?php
session_start();
if ($_SESSION['loggedin'] == 'y' ) {
	header("location: http://www.elasbeautyroom.co.uk/services_edit.php");
	exit();
}

if( $_POST['user']=='ela123' AND $_POST['pass']=='beauty456') {	
	$_SESSION['loggedin'] = 'y';
	header('Location: http://www.elasbeautyroom.co.uk/services_edit.php');
	exit();
}
else if (($_POST['user'] AND $_POST['pass']) == NULL) {
	$error = "";
}
else {
	$error = "Incorrect Login";
}	

?>


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
			tr:hover {background-color: #f5f5f5}
			th, td {
				border-bottom: 1px solid #ddd;
				padding: 15px;
				align: center
				vertical-align:middle;
			}
			th {
				background-color: #8f3763;
				color: white;
				align: center
			}
			td {
			  text-align: center;
			  vertical-align: middle;
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
								<li class="current"><a href="services.php">Services</a></li>
								<li><a href="book.php">Book</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
				</div>				
				
				<!-- Main -->
					<section class="wrapper style1">
						<div class="container">
							<div id="content">

								<!-- Content -->
									<article>
										<header>
											<h2>Services</h2>
											<p>A complete list of beauty treatments offered by me</p>
										</header>
										
										<p>Here's a list of treatments:</p>
										<?php										
											/* Connecting */										
											$dbhost = "212.48.66.176:3306";
											$dbuser = "itecdigi_451917";
											$dbpass = "451917";
											$dbdata = "itecdigi_451917_co1";
											
											if (!mysql_connect($dbhost, $dbuser, $dbpass)){
												  die('Could not connect: ' . mysql_error());
											}
											else {
												  $data = mysql_select_db ($dbdata);
												  if (!$data)
												 {
														die('Could not use: ' .$dbdata);
												 }
											}
											/* Table */	echo "<table>";
											echo "\n";							
												echo '<th>' . 'Name' . '</th>';	
												echo "\n";						
												echo '<th>' . 'Extra Information' . '</th>';	
												echo "\n";								
												echo '<th>' . 'Price' . '</th>';		
												echo "\n";															
												$sql = "SELECT * from post";
												
											echo "<br>";			
											
											$result = mysql_query($sql);		
											while ($row = mysql_fetch_assoc($result)) {	
												echo "\n";									
												echo "<tr>";									
												echo "\n";																	
													echo "<td>";							
														echo $row["t_name"];					
													echo "</td>";							
													echo "\n";								
													echo "<td>";							
														echo $row["t_desc"];					
													echo "</td>";							
													echo "\n";								
													echo "<td>";							
														echo "&pound" . $row["t_price"];					
													echo "</td>";													
												echo "\n";							
												echo "</tr>";						
											}									
											echo "\n";							
											echo "</table>";
										?>
										<br>
										<br>
										
										<h3>Admin Login</h3>
										<form method = "post">
										Username:
										<input type="text" name="user">
										Password:
										<input type="password" name="pass">
										<br>
										<input type="submit" value="Submit">
										</form>
										<?php echo $error; ?>
										
									</article>
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
		</div>
        
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>