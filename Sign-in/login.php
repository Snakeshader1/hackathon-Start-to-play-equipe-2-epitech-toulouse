<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if (!empty($_POST['password']) AND !empty($_POST['email'])){

    $mdp = $_POST['password'];
    $email = $_POST['email'];

    // On affiche chaque entrée une à une

    $req = $bdd->prepare('SELECT Email,Pass FROM account WHERE Email = ?');
    $req->execute(array($email));

    while ($donne = $req->fetch()) {
      if ($mdp == $donne['Pass']) {
         setcookie('email', $email, time() + 365*24*3600,'/', null, false, true);
         echo "connexion reussit !";
         $Log = "1";
      }
      
      if (empty($Log)) {
         echo "La connexion a échoué";
      }
    }
}



?>

<html>
   <head>
      <title>Login</title>
      <meta http-equiv="content-type" content="text/html;charset=utf-8">
      <link rel="stylesheet" type="text/css" href="login.css" />
   </head>
   <body scroll="no" style="overflow: hidden">
      <div><h1>Logo</h1></div>
      <form method="post" action="">
      <div class="form">
         <label for="email">E-mail</label>
      </br>
         <input type="email" maxlength="64" name="email" required 
                placeholder="nomutilisateur@gmail.com" size="20" required>
      </br>
         <label for= "password">Password</label>
      </br>
         <input type="password" id="password" name="password" maxlength="30" required>
      <div class ="messageBox">
         <input type="submit" value="Login">
      </div>
      </div>
      </form>
   </body>
</html>