<?php
require 'function.php';
$req = new SQLrequete('root', '', 'projet_php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch'
          href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/explorer.css"> <!--animation-->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <title>HostPics | hébergement gratuit d'images</title>

</head>
<body>
<?php include('header.php'); ?>

<?php // $req->view_all(); ?>

<div class="cd-main-content">





    <a href=" view.php?id=1"><img class="imgs" src="getImage.php?id=1" width="" height="" /> </a>





<footer>
    <div id="footer">
        <p class="navfooter"><a href="">Conditions d'utilisation </a>&nbsp;|&nbsp;<a href=""> A Propos </a>&nbsp;|&nbsp;<a
                href=""> Aide</a>&nbsp;|&nbsp;<a href=""> Nous Contacter </a></p>
    </div>
</footer>
</div>
</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!--Resource jQuery-->
</body>
</html>
