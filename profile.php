<?PHP
require 'function.php';
$req = new SQLrequete('root', '', 'projet_php');
$v = $req->view_profile();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/style_profile.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/animate.css"> <!-- animations sheet -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <title>HostPics | hébergement gratuit d'images</title>
</head>
<body>
<?php include('header.php'); ?>
<div class="cd-main-content">
    <p><h3 style="margin:  20px" id="text1">Change account informations :</h3></p>
    <br>
    <br>
    <div id="form">

        <form id="setprofile" method="POST" action="#">
            <label for="name">Login</label>
            <div>
                <input type="text" name="name" id="name" value="<?= $v[0]['user_name']; ?>"<br>
            </div>
            <label for="email">Email</label>
            <div>
                <input type="text" name="email" id="email" value="<?= $v[0]['email']; ?>"><br>
            </div>
            <label for="password">Password</label>
            <div>
                <input type="password" name="password" id="password" value="<?= $v[0]['password']; ?>">
            </div>
            <br>
            <button type="submit">Modifier</button>
        </form>

    </div>
</div>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!--Resource jQuery-->

</body>
</html>