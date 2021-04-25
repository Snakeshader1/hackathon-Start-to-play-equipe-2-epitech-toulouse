<?php 

$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

$_COOKIE['Name'] = "Sacha"; 


?>

<!DOCTYPE html>
<html>
<head>
	<title>My account - transaction</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Account_overview.css">
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
			<img src="../../img/loupe.png" width="37px" height="33px">
		</div>
	</header>

	<div id="box">
		<div id="account_overview">
			<p><a href="../Account_overview/Account_overview.php">Account overview</a></p>
			<div id="petitcube"></div>
		</div>
		<div id="transaction">
			<p><a href="../transactions/transaction.php">Transactions</a></p>
		</div>
		<div id="security">
			<p><a href="../Account_security/Account_security.php"> Account security</a></p>

		</div>
		<div id="information">
			<p><a href="../My_informations/My_information.php"> My informations</a></p>
		</div>
	</div>
	<div id="title">
		<p>Welcome, <?php echo $_COOKIE['Name']; 
?></p>
	</div>
	<h2>
		Your tickets :
	</h2>

<!-- ------------------------------------------------------------------------------------------------ -->

	<?php 

	// $req = $bdd->query('SELECT * FROM billet');


	$req = $bdd->prepare('SELECT * FROM billet WHERE Name = ?');
	$req->execute(array($_COOKIE['Name']));

	while ($donnees = $req->fetch()) {

	?>

	<div class="tickets">
		<div class="a">
			<p>From : <?php echo $donnees['Depart'];?></p>
			<p>To : <?php echo $donnees['Arrive'];?></p>
			<p>Est. duration :</p>
			<p><?php echo $donnees['Est_duration'];?></p>
		</div>
		<div class="b">
			<p>Seat : <?php echo $donnees['Seat'];?></p>
			<p>Gate : <?php echo $donnees['Gate'];?></p>
			<p>BOARDING TIME :</p>
			<p><?php echo $donnees['Boarding_time'];?></p>
		</div>
		<div class="c">
			<p>Name : <?php echo $donnees['Name'];?></p>
			<p>Date : <?php echo $donnees['Date'];?></p>
			<p>Pass number : </p>
			<p><?php echo $donnees['Pass number'];?></p>
		</div>
		<div class="d">
			<img src="../../img/qrcode.png" width="170px" height="170px">
		</div>
	</div>
	<?php } ?>
</body>