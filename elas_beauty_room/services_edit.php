<?php
    session_start();
    if( !isset($_SESSION["loggedin"] )) {
        header('Location: http://www.elasbeautyroom.co.uk/services.php');
    }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Services</title>
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
										<h2>Edit Services</h2>
										<p>Add or delete a new beauty treatment / product here.</p>
									</header>
									<p>Here's a list of treatments:</p>
									<?php										
										/* Connecting */										
										$dbhost = "212.48.66.176:3306";
										$dbuser = "itecdigi_451917";
										$dbpass = "451917";
										$dbdata = "itecdigi_451917_co1";
										$conn = mysql_connect($dbhost, $dbuser, $dbpass);
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
										
													
													$name = $_POST['t_name'];
													$desc = $_POST['t_desc'];
													$price = $_POST['t_price'];
													$id = $_POST['t_id'];
													$insert = ("INSERT INTO post (t_name, t_desc, t_price) VALUES ('".$name."', '".$desc."', '".$price."')");
													$handle = mysql_query($insert);
													echo $handle;
													
													
													
													$id = $_POST['t_id'];
													if (!$conn)
													{
													die('Could not connect: ' . mysql_error());
													}

													mysql_select_db("itecdigi_451917_co1", $conn);

													// sending query
													mysql_query("DELETE FROM post WHERE t_id = '$id'")
													or die(mysql_error());      



											/* Table */	
											echo "<table>";
											echo "\n";								
											echo '<th>' . 'ID' . '</th>';	
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
													echo $row["t_id"];					
												echo "</td>";								
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
													echo "£" . $row["t_price"];					
												echo "</td>";							
												echo "\n";														
											echo "\n";							
											echo "</tr>";						
										}									
										echo "\n";							
										echo "</table>";
									?>																	
									<br>
									
									<form method = "post">								
									<h3>Enter a new record</h3>							
									Name										
									<input type='text' name='t_name'>
									<br>
									Extra Information								
									<input type='text' name='t_desc'>	
									<br>									
									Price			
									<br>									
									<input type="decimal" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="t_price">		
									<br>			
									<br>										
									<br>										
									<input type='submit' value='Submit'>		
									</form>						
									
									<br>								
									<br>							
									<br>							
									<br>							
									<br>							
									
									<form method = "post">				
									<h3>Delete a record</h3>				
									<p>Enter the ID of the record you want to delete</p>	
									<input type="decimal" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name='t_id'>					
									<br>								
									<br>								
									<br>								
									<input type='submit' value='Submit'>	
									</form>									
									
									<br>
									<br>
									<br>
									<br>
                                    
									<a href="http://www.elasbeautyroom.co.uk/logout.php">Click to log out</a>
									
								</article>
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