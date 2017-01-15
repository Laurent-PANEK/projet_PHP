<?php 
require 'function.php';
$req = new SQLrequete('id542258_root', 'hostpics', 'id542258_projet_php');
$envoie = false;
if (!empty($_POST)){
    $name= htmlspecialchars($_POST['name']);
    $email= htmlspecialchars($_POST['email']);
    $message= htmlspecialchars($_POST['message']);
    $to="laurent.panek@ynov.com";
    $headers = 'From' . $name . ' : ' .$email ."\r \n";
    $subject='Hostpics Contact : ' . $name;
    mail($to, $subject, $message, $headers);
    $envoie = true;
}?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel='stylesheet prefetch'
              href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
        <link rel="stylesheet" href="css/animate.css"> <!--animation-->
        <script src="js/modernizr.js"></script> <!-- Modernizr -->
        <link rel="stylesheet" href="css/contact.css">
        <title>HostPics | hébergement gratuit d'images<</title>
    </head>
    <body>
    <?php include 'header.php'; ?>
        <div class="cd-main-content">
            <?php if ($envoie == true) {
                echo '<div class="alert success"><strong>Envoi réussi !</strong> Votre message a bien été envoyé.</div>';
            }?>
            <div class="container">  
                <form id="contact" action="#" method="POST">
                    <h3>Contactez Nous</h3>
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
    </body>
</html>