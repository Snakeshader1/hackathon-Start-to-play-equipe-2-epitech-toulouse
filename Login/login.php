<?php 

$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

if (!empty($_POST['email']) AND !empty($_POST['password'])){

    $mdp = $_POST['password'];
    $email = $_POST['email'];

    $req = $bdd->prepare('SELECT * FROM account WHERE Email = ?');
    $req->execute(array($email));

    while ($donne = $req->fetch()) {
      if ($mdp == $donne['Pass']) {
         setcookie('email', $email, time() + 365*24*3600,'/', null, false, true);
         setcookie('name', $donne['Name'], time() + 365*24*3600,'/', null, false, true);
         setcookie('Connection', 1, time() + 365*24*3600,'/', null, false, true);

        }else {
      }
    }
}


if (!empty($_POST['create_username']) AND !empty($_POST['create_email']) AND !empty($_POST['create_name']) AND !empty($_POST['create_password']) AND !empty($_POST['create_confirmpassword']) AND !empty($_POST['create_age'])){

    $username = $_POST['create_username'];
    $email = $_POST['create_email'];
    $name = $_POST['create_name'];
    $mdp = $_POST['create_password'];
    $confpassword = $_POST['create_confirmpassword'];
    $age = $_POST['create_age'];

    $req = $bdd->query('SELECT * FROM account');

    while ($donne = $req->fetch()) {
       if ($email === $donne['Email']) {  // 1er test voir si l'adress mail n'est pas déja utilisé . 
          
          
          header('Refresh: 5; url=login.php'); 
          exit();
       }
    }
    if ($mdp === $confpassword) { // 2eme test voir si les mots de passe correspondent
       $req = $bdd->prepare('INSERT INTO account(Name, Pass, Username, Email, Year_old) VALUES(:Name, :Pass, :Username, :Email, :Year_old)');
       $req->execute(array(
           'Name' => $name,
           'Pass' => $mdp,
           'Username' => $username,
           'Email' => $email,
           'Year_old' => $age,
           ));


        setcookie('email', $email, time() + 365*24*3600,'/', null, false, true);
        setcookie('name', $name, time() + 365*24*3600,'/', null, false, true);
        setcookie('Connection', 1, time() + 365*24*3600,'/', null, false, true);
  
        header('Refresh: 5; url=../nouveau site tec/index.html'); 
    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <header>
    <nav>
            <div id="hyperloop">
                <a href="index.html">
                    Hyperloop
                </a>
            </div>
            <div id="home">
                <p>
                    <a href="">
                        Home
                    </a>
                    
                </p>
            </div>
            <div id="tickets">
                <p>
                    <a href="../buy ticket/buy.html">
                    Buy Tickets
                    </a>
                </p>
            </div>
            <div id="account">
                <p>
                    My account
                </p>
            </div>
            <div id="loupe">
                <img src="loupe.png" width="37px" height="33px">
            </div>
        </div>
    </nav>
    </header>

    <main>
        <div id="para">
            <p>You are not currently logged in.</p>
        </div>

        <form method="post" action"">

        <div id="form">
            <label for="email">E-mail</label>
                <input type="email" id="formail" maxlength="64" name="email" required
                    placeholder="mail@gmail.com" pattern=".+@gmail.com" size="20" required>
        </br>
            <label for= "password">Password</label>
            <input type="password" id="forpass" name="password"
                   minlength="8" required>

        </br>
        <label class="container">Stay logged in
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
        <label class="container">Remember email
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div>
        <input type="submit" class="button" value="">


        <!-- /* ---------------------------------------------------------------------------------*/ -->
        <div id="para2">           
        </form>
            <p>New account</p>

        </div>

        <form method="post" action"">

            <div id="form2">
                <label for="username">Username</label>
                    <input type="username" id="forusername" maxlength="12" name="create_username" required
                        placeholder="username" size="20" required>
            </br>
                <label for="email">E-mail</label>
                    <input type="username" id="formail1" maxlenght="64" name="create_email" required
                        placeholder="mail@gmail.com" pattern=".+@gmail.com" size="20" required>
            </br>
                <label for="email">Name</label>
                    <input type="name" id="forname" maxlenght="25" name="create_name" required
                        placeholder="Jean Moulin" size="20" required>
            </br>
                <label for="password">Password</label>
                    <input type="password" id="forpass1"name="create_password" 
                        minlength="8" required>
            <br>
                <label for="password">Confirm password</label>
                    <input type="password" id="forconfirmpass" name="create_confirmpassword"
                        minlength="8" required>
            <br>
            <div id="ageco">
                <label for="age">Age</label>
            </div>
                    <input type="number" id="forage" name="create_age"
                        maxlength="2" required>
            </div>

            <label class="container1">Accept privacy policy
                <input type="checkbox" id="scales" name="scales" checked="checked">
                <span class="checkmark1"></span>
              </label>
            <input type="submit" class="button1" value="Create account">
        </form>
    </main>
</body>
</html>