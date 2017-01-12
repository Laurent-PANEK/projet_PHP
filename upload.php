<?php
require 'function.php';
$req = new SQLrequete('root', '', 'projet_php');
$req->upload();

?>

<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style_index.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/animate.css"> <!--animation-->
    <link rel="stylesheet" href="css/upload.css">

    <title>Upload</title>
</head>
<body>
<?php include('header.php'); ?>
<div class="cd-main-content">
    <div class="all" style="background-color: dimgrey ; margin: 10vh 20vw 0 20vw; min-width: 250px; min-height: 360px;">
        <br><br><br>
        <form action="" enctype="multipart/form-data" method="post">

            <div class="imgcenter"><img src="img/upload.png" width="150px" height="120px" alt="" class="myAvatar"
                                        style="position:; top:0; left:0; z-index:1;min-height: 120px;min-width: 150px">
                <input type="file" name="file" id="file"
                       style="width:100%x; height:150px; position:relative; top:0px; left:0; z-index:2; opacity:0;">

                <div class="hover1">
                    <input class="title" type="text" name="title" placeholder="TITLE">

                    <br>

                    <button class="button" style="vertical-align:middle"><span>Hover </span>
                </div>

        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
