<?php 

$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

$_COOKIE['Name'] = "Sacha"; 


?>

<!DOCTYPE html>
<html>
<head>
	<title>My account</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="transaction.css">
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
		<p>Welcome, <?php echo $_COOKIE['Name']; 
?></p>
	</div>
	<h2>
		Your transaction :
	</h2>

<!-- ------------------------------------------------------------------------------------------------ -->


<?php 

$req = $bdd->query('SELECT * FROM billet');


// $req = $bdd->prepare('SELECT * FROM billet WHERE Name = ?');
// $req->execute(array($_COOKIE['Name']));

while ($donnees = $req->fetch()) {

?>


	<div class=tickets>
		<div class="a">
			<p>From : <?php echo $donnees['Depart']?>/ To : <?php echo $donnees['Arrive']?> | <?php echo $donnees['Date']?> | <?php echo $donnees['Boarding_time']?></p>
		</div>
		<div class="b">
			<p>120€</p>
		</div>
	</div>

<?php } ?>
</body>