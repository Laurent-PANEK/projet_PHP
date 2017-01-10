<?php
require('connect.php');

?>




<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Inscription | HostPics</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">


    </head>

    <body>

        <p style="color:blue; text-align:center;margin-top:20px;font-size:30px;">Inscription</p>
        <div class="form">
            <div class="thumbnail">LOGO</div>
            <form  method="post" action="function.php" class="register">
                <input type="text" name="username" placeholder="Nom d'utilisateur"/>
                <input type="email" name="email" placeholder="Adresse e-mail"/>
                <input type="password" name="pass" placeholder="Mot de passe"/>
                <button type="submit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> S'inscrire</button>
            </form>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    </body>
</html>
