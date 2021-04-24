<?php

if (isset($_COOKIE['email'])) {
    echo $_COOKIE['email'];

}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>
</head>
<body>
    <?php 

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

    // On récupère tout le contenu de la table jeux_video
    $reponse = $bdd->query('SELECT * FROM account');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>
        <p>
        <strong>Email : <?php echo $_COOKIE['email'];?></strong>
        </p>
    <?php } ?>

    <form method="post" action=""></form>

    <input type="text" name="Email" id="Email" placeholder="email" size="30" maxlength="255" />
    <input type="text" name="pass" id="pass" placeholder="pass" size="30" maxlength="255" />
    <!-- <input type="text" name="pseudo" id="pseudo" placeholder="email" size="30" maxlength="255" />
    <input type="text" name="pseudo" id="pseudo" placeholder="email" size="30" maxlength="255" /> -->

</body>
</html>