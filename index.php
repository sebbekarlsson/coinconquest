<?php
	include("modules/API.php");

	$doc = $_GET['doc'];
	if(!isset($_GET['doc'])){$doc = "home.php";}

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<?php include("modules/nav.php"); ?>
		<div class="content">
			<div class="hero" style="background-image:url(images/house.jpg);">
				<span>
					<h1>CoinConquest</h1>
					<p>Join now and get 500$</p>
				</span>	
			</div>
			<?php include("modules/banner.php"); ?>
			<?php

				include("modules/docs/$doc");

			?>
		</div>
	</body>

	<footer>
	</footer>
</html>