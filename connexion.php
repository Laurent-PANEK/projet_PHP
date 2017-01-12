<?php
require 'function.php';
$req = new SQLrequete('root', '', 'projet_php');
$req->connexion();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion | HostPics</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/animate.css"> <!-- animations sheet -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/animate.css"> <!--animation-->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->


</head>

<body>
<?php include('header.php'); ?>
<div class="cd-main-content">


    <div class="form">
       <h3 style="text-transform:uppercase; margin-bottom:15px;">Connexion</h3>
        <form action="#" class="login" method="post">
            <input name="login" type="text" placeholder="Login"/>
            <input name="pass" type="password" placeholder="Mot de passe"/>
            <button type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</button>
        </form>
        <br>
        <a href="index.php" style="float:right;text-decoration:none;"><i class="fa fa-home" aria-hidden="true"></i>
            Acceuil</a>
        <br>
        <br>
        <br>
        <p>Pas inscrit ?<a href="inscription.php" style="text-align:center;text-decoration:none;"> Créer un compte</a>
        </p>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
