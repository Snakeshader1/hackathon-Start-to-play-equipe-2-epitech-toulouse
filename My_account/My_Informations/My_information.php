<?php 

$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

$_COOKIE['Name'] = "Sasha"; 
$_COOKIE['email'] = "theos123@hotmail.fr";

$req = $bdd->prepare('SELECT * FROM account WHERE Email = ?');
$req->execute(array($_COOKIE['email']));

?>

<!DOCTYPE html>
<html>
<head>
	<title>My account - My information</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="My_informations.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<header>
		<div id="hyperloop">
			<p>
				<a href="../../nouveau site tec/Index.php">
				hyperloop
				</a>
			</p>
		</div>
		<div id="home">
			<p>
				<a href="../../nouveau site tec/Index.php">
				Home
				</a>
			</p>
		</div>
		<div id="tickets">
			<p>
				<a href="../../nouveau site tec/Index.php">
				Buy tickets
				</a>
			</p>
		</div>
		<div id="account">
			<a href="../../../My_account/Account_overview/Account_overview.php">
				My account
			</a>
		</div>
		<div id="loupe">
			<img src="../img/loupe.png" width="37px" height="33px">
		</div>
	</header>

	<div id="box">
		<div id="account_overview">
			<p><a href="../Account_overview/Account_overview.php">Account overview</a></p>
		</div>
		<div id="transaction">
			<p><a href="../transactions/transaction.php">Transactions</a></p>
		</div>
		<div id="security">
			<p><a href="../Account_security/Account_security.php"> Account security</a></p>

		</div>
		<div id="information">
			<p><a href="../My_informations/My_information.php"> My informations</a></p>
			<div id="petitcube"></div>

		</div>
	</div>

	<div id="title">
		<p>Welcome, <?php echo $_COOKIE['Name']; 
?></p>
	</div>
	<h2>
		Your informations :
	</h2>

<!-- ------------------------------------------------------------------------------------------------ -->

		<div class="tickets">
			<div class="a">
				<?php 	while ($donnees = $req->fetch()) { ?>

					<p class="informations">Name : <?php echo $donnees['Name'];?></p>
					<p class="informations">Username : <?php echo $donnees['Username'];?></p>
					<p class="informations">Age : <?php echo $donnees['Year_old'];?></p>
					<p class="informations">Email : <?php echo $donnees['Email'];?></p>

				<?php } ?>
			</div>
		</div>

</body>