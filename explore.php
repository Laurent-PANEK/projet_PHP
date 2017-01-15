<?php
require 'function.php';
$req = new SQLrequete('id542258_root', 'hostpics', 'id542258_projet_php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch'
          href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/explorer.css"> <!--animation-->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <title>HostPics | hébergement gratuit d'images</title>

</head>
<body>
<?php include('header.php'); ?>

<div class="cd-main-content">
    <?php $req->view_all(); ?>


    <?php include 'footer.php'; ?>
</body>
</html>
