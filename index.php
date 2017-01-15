<?PHP
require 'function.php';
$req = new SQLrequete('id542258_root', 'hostpics', 'id542258_projet_php');

?>
<!DOCTYPE html>
<html lang="en">
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
    <title>HostPics | hébergement gratuit d'images</title>
</head>
<body>
<?php include('header.php'); ?>

<div class="cd-main-content">
    <h1 class=" headtitle">Hébergez gratuitement vos images.</h1>
    <br>
    <p class="small">“C'est Simple, Rapide et Sécurisé”</p>
    <br>
    <?php if (isset($_SESSION['connected'])) {
        echo ' <a href = "upload.php" class="btn blue animated pulse" > Uploadez vos fichiers </a > ';
    } else {
        echo '<a href = "connexion.php" class="btn blue animated pulse" > Uploadez vos fichiers </a > ';
    } ?>
    <br><br>
    <div class="tableimg">
        <ul id="gallery">
            <?php $req->last_view(); ?>
        </ul>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>