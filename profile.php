<?PHP

session_start();
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
<?php include ('header.php'); ?>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<p><h3 style="margin:  20px" id="text1">Change account informations :</h3></p>
<br>
<br>
<div id="form">

    <form id="setprofile" method="POST" action="quelquechose.php">
   <p>name :</p>    <input type="text" name="name"  placeholder="enter the new Name"><br>
    <br>
    <p>email :</p><input type="text" name="email"   placeholder="enter the new email"><br>
    <br>
    <p>password :</p>    <input type="password" name="password"    placeholder="enter the new password"></input>
    <br>
    <br>
                        <input type="submit" value="Submit" name="Save">
</form>

</div>

</body>
</html>