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

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="nomDuInput" id="file">
    <input type="text" name="title" id="title" placeholder="title">
    <button type="submit">Envoyer</button>
</form>

</body>
</html>
