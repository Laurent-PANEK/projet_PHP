<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch'
          href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/animate.css"> <!--animation-->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <title>HostPics | hébergement gratuit d'images</title>
</head>
<body>

<header>
    <div class="cd-logo animated bounce"><a href="#0"><img src="img/logo.png" alt="Logo"
                                                           style="max-width:100%; max-height:100%;"></a></div>

    <nav class="cd-main-nav-wrapper">
        <ul class="cd-main-nav">
            <?php if (!isset($_SESSION['connected'])) {
                echo '<li><a href="inscription.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Inscription</a></li>
                    <li><a href="connexion.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a></li>
                    <li><a href="explore.php"><i class="fa fa-eye" aria-hidden="true"></i> Explorer</a></li>
                    // <li><a href="connexion.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a></li>';
            } else {
                echo '<li><a href="profile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Profil</a></li>
                    <li><a href="deconnexion.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Deconnexion</a></li>
                    <li><a href="explore.php"><i class="fa fa-eye" aria-hidden="true"></i> Explorer</a></li>
                    <li><a href="upload.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a></li>';
            }
            ?>

        </ul> <!-- .cd-main-nav -->
    </nav> <!-- .cd-main-nav-wrapper -->

    <a href="#0" class="cd-nav-trigger"><span></span></a>
</header>