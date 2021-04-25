<?php 

$bdd = new PDO('mysql:host=localhost;dbname=hackathon;charset=utf8', 'root', '');

if (!empty($_POST['email']) AND !empty($_POST['name'])){

}

if (!empty($_POST['create_username']) AND !empty($_POST['create_email']) AND !empty($_POST['create_name']) AND !empty($_POST['create_password']) AND !empty($_POST['create_confirmpassword']) AND !empty($_POST['create_age'])){

    $username = $_POST['create_username'];
    $email = $_POST['create_email'];
    $name = $_POST['create_name'];
    $password = $_POST['create_password'];
    $confirm_password = $_POST['create_confirmpassword'];
    $age = $_POST['create_age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Account</title>
    <link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

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
                    Home
                </p>
            </div>
            <div id="tickets">
                <p>
                    Buy Tickets
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

        <!-- -------------------------------SIGN IN ---------------- -->

        <form method="post" action="">

            <div id="form">

                <label for="email">E-mail</label>
                <input type="email" id="formail" maxlength="64" required
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

        <div id="para2">           
        </form>
            <p>New account</p>

        </div>

        <form method="post" action="">

            <div id="form2">
                <label for="username">Username</label>
                    <input type="username" id="forusername" maxlength="12" name="create_username" required
                        placeholder="username" size="20" required>
            </br>
                <label for="email">E-mail</label>
                    <input type="username" id="formail1" maxlenght="64" name="create_E-mail" required
                        placeholder="mail@gmail.com" pattern=".+@gmail.com" size="20" required>
            </br>
                <label for="email">Name</label>
                    <input type="name" id="forname" maxlenght="25" name="create_Name" required
                        placeholder="Jean Moulin" size="20" required>
            </br>
                <label for="password">Password</label>
                    <input type="password" id="forpass1" name="create_password" 
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