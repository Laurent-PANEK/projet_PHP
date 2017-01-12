<?php
session_start();
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

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
            $ae = [];
            $an = [];
            $all_name = $this->query('SELECT user_name, email FROM `user`')->fetchAll();
            foreach ($all_name as $a) {
                array_push($an,$a['user_name']);
                array_push($ae,$a['email']);
            }

            if (in_array($_POST['username'], $an) or in_array($_POST['email'], $ae)) {
                echo '<div class="alert">Votre Nom d\'utilisateur et/ou email est déjà utilisé !. Veuillez changer.</div>';
            }
            else {
                $this->query('INSERT INTO `user`(`user_name`, `password`, `email`) VALUES (:name, :password, :email)',
                    [':name' => $_POST['username'], ':password' => $_POST['pass'], ':email' => $_POST['email']]);
                header('Location: http://localhost/projet_PHP/connexion.php');
            }


        }
    }

    public function connexion()
    {
        if (!empty($_POST)) {

            $a = $this->query('SELECT * FROM `user` WHERE (`user_name` = :login OR email = :email )AND `password` = :pass',
                [':login' => $_POST['login'], ':email' => $_POST['login'], ':pass' => $_POST['pass']])->fetchAll();
            if (count($a) > 0) {
                $_SESSION['connected'] = true;
                $_SESSION['id_user'] = $a[0]['id_user'];
                if ($a[0]['user_name'] === 'admin') {
                    $_SESSION['admin'] = true;
                } else {
                    $_SESSION['admin'] = false;
                }
                header('Location: http://localhost/projet_PHP/profile.php');
            } else {
                header('Location: http://localhost/projet_PHP/index.php');
            }
        }
    }

    public function deconnexion()
    {
        session_unset();
        session_destroy();
        header('Location: http://localhost/projet_PHP/index.php');
    }

    public function view_profile()
    {
        if (!$_SESSION['connected']) {
            header('Location: http://localhost/projet_PHP/connexion.php');
        } else {
            $v = $this->query('SELECT * FROM `user` WHERE `id_user` = :id',
                [':id' => $_SESSION['id_user']])->fetchAll();
            if (!empty($_POST)) {
                $this->query('UPDATE `user` SET `user_name`= :name,`password`= :password,`email`= :email WHERE `id_user` = :id',
                    [':name' => $_POST['name'], ':password' => $_POST['password'], ':email' => $_POST['email'], ':id' => $_SESSION['id_user']]);
                header('Location: http://localhost/projet_PHP/profile.php');
            }
        }
        return $v;
    }

    public function upload()
    {
        if (!empty($_POST)) {
            if (isset($_FILES['file'])) {
                $finfo = finfo_open(FILEINFO_MIME_TYPE); // Vérifie le type MIME du fichier
                $mime = finfo_file($finfo, $_FILES['file']['tmp_name']); // Regarde dans ce fichier le type MIME
                finfo_close($finfo); // Fermeture de la lecture
                $filename = explode('.', $_FILES['file']['name']); // Explosion du nom sur le point
                $extension = $filename[count($filename) - 1]; // L'extension du fichier
                $extension_valide = ['png', 'jpeg', 'gif', 'jpg'];
                $mime_valide = ['image/png', 'image/jpeg', 'image/gif', 'image/jpg'];
                if ((in_array($extension, $extension_valide) && in_array($mime, $mime_valide) && $_FILES['file']['size'] < 20971520)) {
                    $dossier = 'upload/' . $_SESSION['id_user'];
                    if (!is_dir($dossier)) {
                        mkdir($dossier);
                    }
                    move_uploaded_file($_FILES['file']['tmp_name'],
                        'upload/' . $_SESSION['id_user'] . '/' . $_FILES['file']['name']);
                    $this->query('INSERT INTO `image`(`name_image`, `title`, `date`, `ip_address`, `id_user`) VALUES (:name, :title, NOW(), :ip, :id)',
                        [':name' => $_FILES['file']['name'], ':title' => $_POST['title'], ':ip' => $_SERVER['REMOTE_ADDR'], ':id' => $_SESSION['id_user']]);
                    header('Location: http://localhost/projet_PHP/explore.php');
                } else {
                    echo 'format incorrect';
                }
            }

        }

    }

    public function last_view()
    {
        $rep = $this->query('SELECT * FROM image ORDER BY id_image DESC LIMIT 5')->fetchAll();
        return $rep;
    }

    public function view_all()
    {
        $f = $this->query('SELECT id_user FROM `user`')->fetchAll();
        foreach ($f as $id) {
            $i = $this->query('SELECT name_image FROM image WHERE id_user = :id', [':id' => $id['id_user']])->fetchAll();
            foreach ($i as $img) {
                echo '<img class="imgs" src="upload/' . $id['id_user'] . '/' . $img['name_image'] . '" height="200px" width="200px"/>';
            }
        }
    }

}
