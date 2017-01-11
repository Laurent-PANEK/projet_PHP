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
    <title>Document</title>
</head>
<body>
<?php include('header.php'); ?>
<div class="cd-main-content"></div>
<br><br><br><br><br><br><br><br>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="nomDuInput" id="file">
    <input type="text" name="title" id="title" placeholder="title">
    <button type="submit">Envoyer</button>
</form>
</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!--Resource jQuery-->
</body>
</html>
