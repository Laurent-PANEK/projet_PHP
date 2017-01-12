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
    <link rel="stylesheet" href="css/animate.css"> <!--animation-->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <title>HostPics | hébergement gratuit d'images</title>



    <style type="text/css">




        a:hover {
            color: rgb(255, 0, 0);
            text-decoration: none;
        }
        body {
            font-family: Trebuchet MS, sans-serif; font-size: larger;
            margin-bottom: 20px;
            margin-top: 0px;
            color: rgb(102, 0, 0);
            background-image: url("background.jpg"); background-repeat: repeat;
        }
        td {
            text-align: center;
        }
        img {
            border-style: solid;
            border-color: rgb(0,0,0);
            border-width: 0px;
        }
        table.center {margin-left:auto; margin-right:auto;}
        #httphotos {
            position: absolute;
            right: 0px;
            bottom: 20px;
            margin: 0px;
            padding: 0px;
        }

        #httphotos img {
            border: 0px;
        }
    </style>



</head>
<body>
<?php include('header.php'); ?>

<?php // $req->view_all(); ?>

<div class="cd-main-content">





    <div>
        <table class="center">
            <tr><td><a href="index00.html" name="thumb00"><img src="http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg" alt="Click!"></a></td>
                <td><a href="index01.html" name="thumb01"><img src="http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg" alt="Click!"></a></td>
                <td><a href="index02.html" name="thumb02"><img src="http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg" alt="Click!"></a></td>
                <td><a href="index03.html" name="thumb03"><img src="http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg" alt="Click!"></a></td>
            </tr><tr><td><a href="index04.html" name="thumb04"><img src="http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg" alt="Click!"></a></td>
                <td><a href="index05.html" name="thumb05"><img src="http://www.sporthorse-data.com/horse/10812822/103/Horse_Padrons_Immage.jpg" alt="Click!"></a></td>
                <td><a href="index06.html" name="thumb06"><img src="thumb06.jpg" alt="Click!"></a></td>
                <td><a href="https://3.bp.blogspot.com/-W__wiaHUjwI/Vt3Grd8df0I/AAAAAAAAA78/7xqUNj8ujtY/s1600/image02.png" name="thumb07"><img src="thumb07.jpg" alt="Click!"></a></td></tr>
            <tr><td><a href="index08.html" name="thumb08"><img src="thumb08.jpg" alt="Click!"></a></td><td><a href="index09.html" name="thumb09"><img src="thumb09.jpg" alt="Click!"></a></td>
                <td><a href="index10.html" name="thumb10"><img src="thumb10.jpg" alt="Click!"></a></td><td><a href="index11.html" name="thumb11"><img src="thumb11.jpg" alt="Click!"></a></td></tr><tr>
                <td><a href="index12.html" name="thumb12"><img src="thumb12.jpg" alt="Click!"></a></td><td><a href="index13.html" name="thumb13"><img src="thumb13.jpg" alt="Click!"></a></td>
                <td><a href="index14.html" name="thumb14"><img src="thumb14.jpg" alt="Click!"></a></td><td><a href="index15.html" name="thumb15"><img src="thumb15.jpg" alt="Click!"></a></td></tr><tr><td></td><td></td><td></td><td></td></tr>
        </table></div>
    <div><a href="http://www.digicamsoft.com/softhttphotos.html" id="httphotos"><img src="httphotos.gif" title="httphotos:// create photo gallery" alt="httphotos:// create photo gallery"></a></div>







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
