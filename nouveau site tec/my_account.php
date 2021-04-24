<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>My account</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="account_style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<header>
		<div id="hyperloop">
			<p>
				hyperloop
			</p>
		</div>
		<div id="home">
			<p>
				Home
			</p>
		</div>
		<div id="tickets">
			<p>
				Buy tickets
			</p>
		</div>
		<div id="account">
			<p>
				My account
			</p>
		</div>
		<div id="loupe">
			<img src="img/loupe.png" width="37px" height="33px">
		</div>
	</header>

	<div id="box">
		<div id="account_overview">
			<p>Account overview</p>
			<div id="petitcube"></div>
		</div>
		<div id="transaction">
			<p>Transactions</p>
		</div>
		<div id="security">
			<p>Account security</p>
		</div>
		<div id="information">
			<p>My informations</p>
		</div>
	</div>
	<div id="title">
		<p>Welcome, username</p>
	</div>
	<h2>
		Your tickets :
	</h2>

	<?php ?>

	<div class="tickets">
		<div class="a">
			<p>From : Paris - France</p>
			<p>To : Toulouse - France</p>
			<p>Est. duration :</p>
			<p>678km - 37 minutes</p>
		</div>
		<div class="b">
			<p>Seat : 5A</p>
			<p>Gate : A75</p>
			<p>BOARDING TIME :</p>
			<p>07:45 UTC+1</p>
		</div>
		<div class="c">
			<p>Name : Didier Didier</p>
			<p>Date : 20/04/2022</p>
			<p>Pass number :</p>
			<p>HPT 5782 5842354</p>
		</div>
		<div class="d">
			<img src="img/qrcode.png" width="170px" height="170px">
		</div>
	</div>
	
</body>
</html>