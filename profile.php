<?PHP


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style_profile.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <title>HostPics | hébergement gratuit d'images</title>
</head>
<body>
<header>
    <div class="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>

    <nav class="cd-main-nav-wrapper">
        <ul class="cd-main-nav">
            <li><a href="inscription.php"><i class="fa fa-home" aria-hidden="true"></i> Acceuil</a></li>
            <li><a href="connexion.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Déconnexion</a></li>
            <li><a href="#0"><i class="fa fa-question" aria-hidden="true"></i> A Propos</a></li>
            <li><a href="#0"><i class="fa fa-id-badge" aria-hidden="true"></i> (°.°) USERname</a></li>
        </ul> <!-- .cd-main-nav -->
    </nav> <!-- .cd-main-nav-wrapper -->

    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
</header>
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
<main class="cd-main-content">
    <!-- main content here -->
</main>

</body>
</html>