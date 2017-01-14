<?php
require 'function.php';
$req = new SQLrequete('id542258_root', 'hostpics', 'id542258_projet_php');
$v = $req->view();
$r =$req->stat_view($_GET['id']);
?>


<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/animate.css"> <!--animation-->
    <link rel="stylesheet" href="css/view.css">

    <title>HostPics | hébergement gratuit d'images</title>
</head>
<body>
<?php include('header.php'); ?>
<div class="cd-main-content">
    <div class="all1">
        <div class="aff">
            <img class="imgsrc" src="<?php echo 'upload/' . $v[0]['id_user'] . '/' . $v[0]['name_image']; ?>" alt="error">
            <br>
            <span> <?php echo 'Vu : ' . $r[0]['nb_view'] . ' fois'?> </span>
        </div>
        <div class="form">
            <form class="links" action="">
                <p class="html1"> Lien vers l'image : </p>
                <textarea class="input" name="" id="" cols="40"
                          rows="1"><?php echo 'https://hostpics.000webhostapp.com/view.php?id=' . $v[0]['id_image']; ?> </textarea>
                <br>
                <p class=" html1"> Balise <\HTML> : </p>
                <textarea class="input" name="" id="" cols="40"
                          rows="5"><?php echo '<a href="https://hostpics.000webhostapp.com/view.php?id=' . $v[0]['id_image'] . '"><img src="https://hostpics.000webhostapp.com/upload/' . $v[0]['id_user'] . '/' . $v[0]['name_image'] . '" alt=""/></a>' ?></textarea>
                <br>
                <p class=" html1">URL de l'image: </p>
                <textarea class="input" name="" id="" cols="40"
                          rows="2"><?php echo 'https://hostpics.000webhostapp.com/upload/' . $v[0]['id_user'] . '/' . $v[0]['name_image']; ?></textarea>
                <br>
            </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
