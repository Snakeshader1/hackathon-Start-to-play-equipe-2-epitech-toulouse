<?php 

$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

$_COOKIE['Name'] = "Sacha"; 
$_COOKIE['email'] = "theos123@hotmail.fr";


if (!empty($_POST['now_password']) AND !empty($_POST['new_password']) AND !empty($_POST['new_confpassword'])){

	$mdp = $_POST['now_password'];
	$new_mdp = $_POST['new_password'];
	$new_condmdp = $_POST['new_confpassword'];

	$req = $bdd->prepare('SELECT * FROM account WHERE Email = ?');
	$req->execute(array($_COOKIE['email']));


	while ($donnees = $req->fetch()) {
		if($_COOKIE['email'] == $donnees['Email']) {
			if ($mdp == $donnees['Pass']) {
				if ($new_mdp == $new_condmdp) {

					$req = $bdd->prepare('UPDATE account SET Pass = :Pass WHERE Email = :Email');
					$req->execute(array(
						'Pass' => $new_mdp,
						'Email' => $_COOKIE['email'],
						));
				}
			}
		}
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
			<a href="../../buy ticket/buy.html">
                    Buy Tickets
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
			<div id="petitcube"></div>

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
		Account security :
	</h2>

<!-- ------------------------------------------------------------------------------------------------ -->

		<form method="post" action="">

		<div class="tickets">
			<div class="a">
				<label for="now_password"> Actualy password <br></label>
				<label for="new_password">New password <br></label>
				<label for="new_confpassword">confirm the new password<br></label>
			</div>
			<div class="b">
				<input class="button" type="password" name="now_password" required>
				<input class="button" type="password" name="new_password" required>
				<input class="button" type="password" name="new_confpassword" required>
				<input class="submit" type="submit" name="submit" required>
			</div>
		</div>
		</form>

</body>