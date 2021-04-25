<?php 

$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

$_COOKIE['Name'] = "Sasha"; 
$_COOKIE['email'] = "Snake@gmail.com";

if (!empty($_POST['now_password']) AND !empty($_POST['new_password']) AND !empty($_POST['new_confpassword'])){

	$mdp = $_POST['now_password'];
	$new_mdp = $_POST['new_password'];
	$new_condmdp = $_POST['new_confpassword'];

	$req = $bdd->prepare('SELECT * FROM account WHERE Email = ?');
	$req->execute(array($_COOKIE['email']));

	while ($donnees = $req->fetch()) {
		echo $donnees['mdp'];
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My account - transaction</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="account_security.css">
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
		Account security :
	</h2>

<!-- ------------------------------------------------------------------------------------------------ -->

		<form methode="post" action="">

		<div class="tickets">
			<div class="a">
				<label for="now_password"> Actualy password <br></label>
				<label for="new_password">New password <br></label>
				<label for="new_confpassword">confirm the new password<br></label>
			</div>
			<div class="b">
				<input class="button" type="password" name="now_password">
				<input class="button" type="password" name="new_password">
				<input class="button" type="password" name="new_confpassword">
				<input class="submit" type="submit" name="new_confpassword">
			</div>
		</div>
		</form>

</body>