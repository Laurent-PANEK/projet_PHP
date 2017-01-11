<?php

class SQLrequete
{
    private $dbh;

    public function __construct($login, $password, $database_name, $host = 'localhost')
    {
        try {
            $this->dbh = new PDO("mysql:dbname=$database_name;host=$host", $login, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
    }

    /**
     * @param $query
     * @param bool|array $params
     * @return PDOStatement
     */
    public function query($query, $params = false)
    {
        if ($params) {
            $req = $this->dbh->prepare($query);
            $req->execute($params);
        } else {
            $req = $this->dbh->query($query);
        }
        return $req;
    }


    public function inscription()
    {
        if (!empty($_POST)) {
            $this->query('INSERT INTO `user`(`user_name`, `password`, `email`) VALUES (:name, :password, :email)',
                [':name' => $_POST['username'], ':password' => $_POST['pass'], ':email' => $_POST['email']]);
            header('Location: http://localhost/projet_PHP/connexion.php');

        }
    }

    public function connexion()
    {
        if (!empty($_POST)) {

            $a = $this->query('SELECT * FROM `user` WHERE `user_name` = :login AND `password` = :pass',
                [':login' => $_POST['login'], ':pass' => $_POST['pass']])->fetchAll();
            if (count($a) > 0) {
                $_SESSION['connected'] = true;
                $_SESSION['id_user'] = $a[0]['id_user'];
                if ($a[0]['user_name'] === 'admin') {
                    $_SESSION['admin'] = true;
                } else {
                    $_SESSION['admin'] = false;
                }
                header('Location: http://localhost/projet_PHP/index.php');
            } else {
                header('Location: http://localhost/projet_PHP/index.php');
            }
        }
    }

    public function deconnexion()
    {
        session_unset();
        session_destroy();
        header('Location: http://localhost/projet_PHP/connexion.php');
    }

    public function view_profile($dbh)
    {
        if (!$_SESSION['connected']) {
            header('Location: http://localhost/projet_PHP/connexion.php');
        } else {
            $info = $dbh->prepare('SELECT * FROM `user` WHERE `id_user` = :id');
            $info->execute([':id' => $_SESSION['id_user']]);
            $v = $info->fetchAll();
            if (!empty($_POST)) {
                $stmt = $dbh->prepare('UPDATE `user` SET `name`= :name,`password`= :password,`email`= :email WHERE `id_user` = :id');
                $stmt->execute([':name' => $_POST['nom'], ':password' => $_POST['pass'], ':email' => $_POST['email'], ':id' => $_SESSION['id_user']]);
                header('Location: http://localhost/Formulaire/account.php');
            }
        }
    }

    public function upload($dbh)
    {
        if (!empty($_POST)) {
            if (isset($_FILES['file'])) {
                $finfo = finfo_open(FILEINFO_MIME_TYPE); // Vérifie le type MIME du fichier
                $mime = finfo_file($finfo, $_FILES['file']['tmp_name']); // Regarde dans ce fichier le type MIME
                finfo_close($finfo); // Fermeture de la lecture
                $filename = explode('.', $_FILES['file']['name']); // Explosion du nom sur le point
                $extension = $filename[count($filename) - 1]; // L'extension du fichier
                if (($extension == 'png' && $mime == 'image/png' && $_FILES['file']['size'] < 20971520) || ($extension == 'jpeg' && $mime == 'image/jpeg' && $_FILES['file']['size'] < 20971520)) {
                    $dossier = 'upload/' . $_SESSION['id_user'];
                    if (!is_dir($dossier)) {
                        mkdir($dossier);
                    }
                    move_uploaded_file($_FILES['file']['tmp_name'],
                        'upload/' . $_SESSION['id_user'] . '/' . $_FILES['file']['name']);
                    echo 'upload done';
                } else {
                    echo 'format incorrect';
                }
            }
            $stmt = $dbh->prepare('INSERT INTO `image`(`name_image`, `title`, `date`, `ip_address`) VALUES (:name, :title, :date, :ip)');
            $stmt->execute([':name_image' => $_FILES['file']['name'], ':title' => $_POST['title'], ':date' => CURDATE(), ':ip' => $_SERVER['REMOTE_ADDR']]);
            header('Location: http://localhost/projet_PHP/index.php');
        }

    }

    public function modif_user($dbh)
    {
        if (!empty($_POST)) {
            $stmt = $dbh->prepare('UPDATE `user` SET `name`= :name,`password`= :password,`email`= :email WHERE `id_user` = :id');
            $stmt->execute([':name' => $_POST['nom'], ':password' => $_POST['pass'], ':email' => $_POST['email'], ':id' => $_SESSION['id_user']]);
            header('Location: http://localhost/projet_PHP/index.php');
        }
    }

    public function last_view($dbh)
    {
        $req = $dbh->prepare('SELECT * FROM image ORDER BY id_image DESC LIMIT 5');
        $req->execute();
        $rep = $req->fetchAll();
    }
}

$req = new SQLrequete('root', '', 'projet_php');

if ($_SERVER['HTTP_REFERER'] == $_SERVER['HTTP_ORIGIN'] . '/projet_PHP/connexion.php') {
    $req->connexion();
}

if ($_SERVER['HTTP_REFERER'] == $_SERVER['HTTP_ORIGIN'] . '/projet_PHP/inscription.php') {
    $req->inscription();
}
