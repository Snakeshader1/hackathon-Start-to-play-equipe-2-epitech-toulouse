<?php
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
        username : <?php echo $donnees['Username']; ?>, name : <?php echo $donnees['Name']; ?><br />
        Email <?php echo $donnees['Email']; ?> et on peut y jouer à <?php echo $donnees['Year_old']; ?> au maximum<br />
        </p>
    <?php } ?>

</body>
</html>