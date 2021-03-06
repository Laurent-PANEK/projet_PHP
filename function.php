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
                array_push($an, $a['user_name']);
                array_push($ae, $a['email']);
            }
            if (in_array(htmlspecialchars($_POST['username']), $an) or in_array(htmlspecialchars($_POST['email']), $ae)) {
                echo '<div class="alert">Votre Nom d\'utilisateur et/ou email est déjà utilisé ! Veuillez changer.</div>';
            } else {
                $this->query('INSERT INTO `user`(`user_name`, `password`, `email`) VALUES (:name, :password, :email)',
                    [':name' => htmlspecialchars($_POST['username']), ':password' => crypt(htmlspecialchars($_POST['pass']), '$5$rounds=2000$usesomesillystringforsalt$'), ':email' => htmlspecialchars($_POST['email'])]);
                header('Location: connexion.php');
            }
        }
    }

    public function connexion()
    {
        if (!empty($_POST)) {

            $a = $this->query('SELECT * FROM `user` WHERE (`user_name` = :login OR email = :email )AND `password` = :pass',
                [':login' => htmlspecialchars($_POST['login']), ':email' => htmlspecialchars($_POST['login']), ':pass' => crypt(htmlspecialchars($_POST['pass']), '$5$rounds=2000$usesomesillystringforsalt$')])->fetchAll();
            if (count($a) > 0) {
                $_SESSION['connected'] = true;
                $_SESSION['id_user'] = $a[0]['id_user'];
                if ($a[0]['user_name'] === 'admin') {
                    $_SESSION['admin'] = true;
                } else {
                    $_SESSION['admin'] = false;
                }
                header('Location: profile.php');
            } else {
                echo '<div class="alert">Vos identifiants sont incorrects !</div>';
            }
        }
    }

    public function deconnexion()
    {
        session_unset();
        session_destroy();
        header('Location: index.php');
    }

    public function view_profile()
    {
        if (!$_SESSION['connected']) {
            header('Location: connexion.php');
        } else {
            $v = $this->query('SELECT * FROM `user` WHERE `id_user` = :id',
                [':id' => $_SESSION['id_user']])->fetchAll();
            if (!empty($_POST)) {
                $this->query('UPDATE `user` SET `user_name`= :name,`password`= :password,`email`= :email WHERE `id_user` = :id',
                    [':name' => htmlspecialchars($_POST['name']), ':password' => crypt(htmlspecialchars($_POST['password']), '$5$rounds=2000$usesomesillystringforsalt$'), ':email' => htmlspecialchars($_POST['email']), ':id' => $_SESSION['id_user']]);
                header('Location: profile.php');
            }
        }
        return $v;
    }

    public function upload()
    {
        if (!$_SESSION['connected']) {
            header('Location: connexion.php');
        } else {
            if (isset($_FILES['file'])) {
                $finfo = finfo_open(FILEINFO_MIME_TYPE); // Vérifie le type MIME du fichier
                $mime = finfo_file($finfo, $_FILES['file']['tmp_name']); // Regarde dans ce fichier le type MIME
                finfo_close($finfo); // Fermeture de la lecture
                $filename = explode('.', $_FILES['file']['name']); // Explosion du nom sur le point
                $extension = $filename[count($filename) - 1]; // L'extension du fichier
                $extension_valide = ['png', 'jpeg', 'gif', 'jpg'];
                $mime_valide = ['image/png', 'image/jpeg', 'image/gif', 'image/jpg'];
                if ((in_array($extension, $extension_valide) && in_array($mime, $mime_valide))) {
                    if ($_FILES['file']['size'] < 20971520) {
                        $dossier = 'upload/' . $_SESSION['id_user'];
                        if (!is_dir($dossier)) {
                            mkdir($dossier);
                        }
                        move_uploaded_file($_FILES['file']['tmp_name'],
                            'upload/' . $_SESSION['id_user'] . '/' . $_FILES['file']['name']);
                        $this->query('INSERT INTO `image`(`name_image`, `date`, `ip_address`, `id_user`) VALUES (:name, NOW(), :ip, :id)',
                            [':name' => $_FILES['file']['name'], ':ip' => $_SERVER['REMOTE_ADDR'], ':id' => $_SESSION['id_user']]);
                        echo '<div class="alert success"><strong>Upload réussi !</strong> Votre image a bien été envoyé.</div>';
                    } else {
                        echo '<div class="alert"><strong>Echec ! </strong>Fichier trop volumineux !</div>';
                    }

                } else {
                    echo '<div class="alert"><strong>Echec ! </strong>Format incorrect !</div>';
                }
            }
        }
    }

    public function last_view()
    {
        $rep = $this->query('SELECT id_image,name_image,id_user FROM image ORDER BY id_image DESC LIMIT 5')->fetchAll();
        foreach ($rep as $img) {
            echo '<li><a href="view.php?id=' . $img['id_image'] . '"><img src="upload/' . $img['id_user'] . '/' . $img['name_image'] . '" width="200" height="150px" alt="image01"></a></li>';
        }
    }

    public function view_all()
    {
        $i = $this->query('SELECT id_image,name_image,id_user FROM image ORDER BY id_image DESC')->fetchAll();
        foreach ($i as $img) {
            echo '<a href="view.php?id=' . $img['id_image'] . '"><img class="imgs" src="upload/' . $img['id_user'] . '/' . $img['name_image'] . '" height="200vh" width="300vw"/></a>';
        }
    }

    public function view_perso()
    {
        if (!$_SESSION['connected']) {
            header('Location: connexion.php');
        } else {
            $p = $this->query('SELECT name_image,id_image FROM image WHERE id_user = :id', [':id' => $_SESSION['id_user']])->fetchAll();
            foreach ($p as $img) {
                echo '<div class="aff"><a href="view.php?id=' . $img['id_image'] . '"><img class="imgs" src="upload/' . $_SESSION['id_user'] . '/' . $img['name_image'] . '" height="200vh" width="300vw"/>
            </a><br><a href="delete.php?id=' . $img['id_image'] . '">Supprimer</a></div>';
            }
        }
    }

    public function view()
    {
        $v = $this->query('SELECT * FROM image WHERE id_image = :id', [':id' => htmlspecialchars($_GET['id'])])->fetchAll();
        return $v;
    }


    public function delete()
    {
        $p = $this->query('SELECT * FROM image WHERE id_user = :id', [':id' => $_SESSION['id_user']])->fetchAll();
        unlink('upload/' . $_SESSION['id_user'] . '/' . $p[0]['name_image']);
        $this->query('DELETE FROM image WHERE id_image = :id', [':id' => htmlspecialchars($_GET['id'])]);
        header('Location: myimage.php');
    }

    public function stat_view($id)
    {
        $rep = $this->query('SELECT * FROM image WHERE id_image = :id', [':id' => $id])->fetchAll();
        if ($rep[0]['nb_view'] == NULL) {
            $this->query('UPDATE image SET nb_view = 1 WHERE id_image = :id', [':id' => $id]);
        } else {
            $this->query('UPDATE image SET nb_view = nb_view + 1 WHERE id_image = :id', [':id' => $id]);
        }
        $re = $this->query('SELECT * FROM image WHERE id_image = :id', [':id' => $id])->fetchAll();
        return $re;
    }

}
