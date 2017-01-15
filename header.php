<header>
    <div class="cd-logo"><a href="index.php"><img class="imglogo" src="img/logo.png" alt="Logo"
                                                  style="max-width:100%; max-height:100%;"></a></div>

    <nav class="cd-main-nav-wrapper">
        <ul class="cd-main-nav">
            <?php if (!isset($_SESSION['connected'])) {
                echo '<li><a href="inscription.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Inscription</a></li>
                    <li><a href="connexion.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion</a></li>
                    <li><a href="explore.php"><i class="fa fa-eye" aria-hidden="true"></i> Explorer</a></li>
                     <li><a href="connexion.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a></li>';
            } else {
                echo '<li><a href="profile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Profil</a></li>
					<li><a href="myimage.php"><i class="fa fa-picture-o" aria-hidden="true"></i> Mes images</a></li>
                    <li><a href="deconnexion.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Déconnexion</a></li>
                    <li><a href="explore.php"><i class="fa fa-eye" aria-hidden="true"></i> Explorer</a></li>
                    <li><a href="upload.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a></li>';
            }
            ?>

        </ul> <!-- .cd-main-nav -->
    </nav> <!-- .cd-main-nav-wrapper -->

    <a href="#0" class="cd-nav-trigger"><span></span></a>
</header>