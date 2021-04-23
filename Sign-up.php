<?php

if (!empty($_POST['pass']) AND !empty($_POST['name']) AND !empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['year_old'])){

    $mdp = $_POST['pass'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $year_old = $_POST['year_old'];

    $req = $bdd->prepare('INSERT INTO account(Name, Pass, Username, Email, Year_old) VALUES(:Name, :Pass, :Username, :Email, :Year_old)');
    $req->execute(array(
        'Name' => $name,
        'Pass' => $mdp,
        'Username' => $username,
        'Email' => $email,
        'Year_old' => $year_old,
        ));

    echo 'Sign-up marche !';
}

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>
</head>
<body>
    <?php 
    // On récupère tout le contenu de la table jeux_video
    $reponse = $bdd->query('SELECT * FROM account');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>
        <p>
        <strong>Id : </strong> <?php echo $donnees['Id']; ?><br />
        username : <?php echo $donnees['Username']; ?>, name : <?php echo $donnees['Name'];?>, et Mdp : <?php echo $donnees['Pass'] ?><br />
        Email <?php echo $donnees['Email']; ?> et on peut y jouer à <?php echo $donnees['Year_old']; ?> au maximum<br />
        </p>
    <?php } ?>

    <form method="post" action=""></form>

    <input type="text" name="Email" id="Email" placeholder="email" size="30" maxlength="255" />
    <input type="text" name="pass" id="pass" placeholder="pass" size="30" maxlength="255" />
    <!-- <input type="text" name="pseudo" id="pseudo" placeholder="email" size="30" maxlength="255" />
    <input type="text" name="pseudo" id="pseudo" placeholder="email" size="30" maxlength="255" /> -->


<?php 


?>

</body>
</html>