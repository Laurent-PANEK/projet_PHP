<?php 
require 'function.php';
$req = new SQLrequete('root', '', 'projet_php');
?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
        <link rel="stylesheet" href="css/contact.css">
        <title>Contact | HostPics</title>
    </head>
    <body>
    <?php include('header.php'); ?>
        <div class="cd-main-content">
            <div class="container">  
                <form id="contact" action="envoi.php" method="POST">
                    <h3>Conatctez Nous</h3>
                    <h4>Formulaire de Contact HostPics</h4>
                    <fieldset>
                        <input name="name" placeholder="Votre nom" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input name="email" placeholder="Votre adresse E-mail" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <textarea name="message" placeholder="Écrivez votre message ici..." tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Envoi">Envoyer</button>
                    </fieldset>
                </form>
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>