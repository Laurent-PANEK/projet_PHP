<?php
require 'function.php';
$req = new SQLrequete('root', '', 'projet_php');
$req->inscription();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription | HostPics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel="stylesheet" href="css/animate.css.css"> <!-- animations sheet -->
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->



</head>

<body>

<?php include('header.php'); ?>
<div class="cd-main-content">
    <div class="form">
        <form method="post" action="#" class="register">
            <input type="text" name="username" placeholder="Nom d'utilisateur"/>
            <input type="email" name="email" placeholder="Adresse e-mail"/>
            <input type="password" name="pass" placeholder="Mot de passe"/>
            <button type="submit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> S'inscrire</button>
        </form>
		   <br>
        <a href="index.php" style="float:right;text-decoration:none;"><i class="fa fa-home" aria-hidden="true"></i>
            Acceuil</a>
        <br>
        <br>
        <br>
        <p>Déjà membre ?<a href="connexion.php" style="text-align:center;text-decoration:none;"> Connectez vous</a>
        </p>
    </div>
    </div>
</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!--Resource jQuery-->

</body>
</html>
