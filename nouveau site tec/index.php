<?php 

if (isset($_COOKIE['Connection'])){
	$connection = $_COOKIE['Connection'];
}else {
	$connection = 0;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<header>
		<div id="hyperloop">
			<p>
				<a href="Index.php">
				hyperloop
				</a>
			</p>
		</div>
		<div id="home">
			<p>
				<a href="Index.php">
				Home
				</a>
			</p>
		</div>
		<div id="tickets">
			<p>
					<a href="../buy ticket/buy.html">
                    Buy Tickets
                    </a>
			</p>
		</div>
		<div id="account">
			<?php 
			
			if ($connection == 1) {
				echo "<a href='../My_account/Account_overview/Account_overview.php'>";
			}else {
				echo "<a href='../Login/login.php'>";
			}
			?>
				My account
			</a>
		</div>
		<div id="loupe">
			<img src="../img/loupe.png" width="37px" height="33px">
		</div>
	</header>
	<div id="europe">
		<h1>
			Welcome to a new way of transportation
		</h1>
		<p>
			HYPERLOOP
		</p>
	</div>
	<div id="presentation">
		<p>
			The safest and fastest way of
			<br> transportation
		</p>
		<div id="textimg">
			<div id="description">
				<h1>
					Using magnetic levitation and traveling through
					<br>air free vacuum tube, the Hyperloop      
					<br>capsule can reach speeds over a 
					<br>thousand kilometer per hour
					<br>
					<br>The capsule’s luxurious interior
					<br>combined with the levitation 
					<br>suspension ensure that you
					<br>will have a confortable and 
					<br>enjoyable ride.
					<br>
					<br>In case of emergency,
					<br>quick action brake allow the 
					<br>capsule to safely slow down 
					<br>and stop.
				</h1>
			</div>
			<img src="../img/hyperloop.png" height="60%" width="60%">
		</div>
	</div>
	<div id="video">
		<p>
			Here what the experience 
			<br>looks like : 
		</p>
		<iframe width="1080" height="720" src="https://www.youtube.com/embed/-zSWagCyWio" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div id="button">
		<p>Buy tickets</p>
	</div>

	<footer>
		<div id="global">
			<div>
				<p> <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">© Hyperloop 2021 </a> </p>
			</div>
			<div>
				<p> <a href="../footer/Privcy Policy.html">Privacy policy </a></p>
			</div>
			<div>
				<p><a href="../footer/terms and condition.html">  Terms and conditions </a></p>
			</div>
			<div>
				<p> <a href="../footer/Password reset"> Need help ? </a></p>
			</div>
			<div>
				<p> <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> Q&A</a></p>
			</div>
			<div>
				<p> <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> About us</a></p>
			</div>
			<div>
				<p> <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> Contact </a></p>
			</div>
		</div>
	</footer>
</body>
</html>