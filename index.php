<?PHP
session_start();

?>
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
<?php include ('header.php'); ?>

<div class="cd-main-content">
    <h1 class=" headtitle">Hébergez gratuitement vos images.</h1>
    <br>
    <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <br>
    <?php if (isset($_SESSION['connected'])) {
        echo ' < a href = "upload.php" class="btn blue animated shake" > Uploadez vos fichiers </a > ';
    } else {
        echo '<a href = "connexion.php" class="btn blue animated shake" > Uploadez vos fichiers </a > ';
    } ?>
    <footer class="footer">
        <div class="container">
            <p class="navfooter"><a href="">Conditions d'utilisation </a>&nbsp;|&nbsp;<a href=""> A Propos </a>&nbsp;|&nbsp;<a
                        href=""> Aide</a>&nbsp;|&nbsp;<a href=""> Nous Contacter </a></p>
        </div>
    </footer>
</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!--Resource jQuery-->
</body>
</html>