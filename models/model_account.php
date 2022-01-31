<?php
require_once("../controllers/controller_account.php");

session_start();

class Account
{

    protected $bdd;

    function connect_to_db()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost:8889;dbname=my_meetic', 'root', 'root');
            $connection = true;
        } catch (Exception $e) {
            echo "erreur de connection";
            $connection = false;
        }
    }

    public function GetId()
    {
        $session = $_SESSION['email'];
        $id = $this->bdd->query("SELECT id FROM compte WHERE email LIKE '$session';");
        $id->execute();
        $a = $id->fetch(PDO::FETCH_ASSOC);
        $id = implode($a);
        $_SESSION['id'] = $id;
    }

    public function mail($mail_aff)
    {
        $id = $_SESSION['id'];
        $mail = $this->bdd->query("SELECT email FROM compte WHERE id LIKE '$id';");
        $mail->execute();
        $a = $mail->fetch(PDO::FETCH_ASSOC);
        $mail_aff = print_r(implode($a));
    }


    public function nom($nom_aff)
    {
        $id = $_SESSION['id'];
        $session = $_SESSION['id'];
        $LastName = $this->bdd->query("SELECT nom FROM compte WHERE id LIKE '$id';");
        $LastName->execute();
        $a = $LastName->fetch(PDO::FETCH_ASSOC);
        $nom_aff = print_r(implode($a));
    }

    public function prenom($prenom_aff)
    {
        $id = $_SESSION['id'];
        $session = $_SESSION['id'];
        $FirstName = $this->bdd->query("SELECT prenom FROM compte WHERE id LIKE '$id';");
        $FirstName->execute();
        $a = $FirstName->fetch(PDO::FETCH_ASSOC);
        $prenom_aff = print_r(implode($a));
    }

    public function genre($genre_aff)
    {
        $id = $_SESSION['id'];
        $session = $_SESSION['id'];
        $genre = $this->bdd->query("SELECT sexe FROM compte WHERE id LIKE '$id';");
        $genre->execute();
        $a = $genre->fetch(PDO::FETCH_ASSOC);
        $genre_aff = print_r(implode($a));
    }

    public function loisir($loisir_aff)
    {
        $id = $_SESSION['id'];
        $session = $_SESSION['id'];
        $loisir = $this->bdd->query("SELECT loisir FROM compte WHERE id LIKE '$id';");
        $loisir->execute();
        $a = $loisir->fetch(PDO::FETCH_ASSOC);
        $loisir_aff = print_r(implode($a));
    }

    public function ModifyEmail()
    {

        $id = $_SESSION['id'];

        $modi = $_POST['ModifyEmail'];
        $requete = $this->bdd->query("UPDATE compte SET email = '$modi' 
        WHERE compte.id = '$id';");
        $requete->execute();
    }

    public function ModifyPassword()
    {

        $id = $_SESSION['id'];
        $modi = $_POST['ModifyPassword'];
        $requete = $this->bdd->query("UPDATE compte SET mot_de_passe = sha1('$modi') 
        WHERE compte.id = '$id';");
        $requete->execute();
    }

    public function ModifyLoisir()
    {
        $id = $_SESSION['id'];
        $modi = $_POST['ModifyLoisir'];
        $requete = $this->bdd->query("UPDATE compte SET loisir = '$modi' 
        WHERE compte.id = '$id';");
        $requete->execute();
    }

    public function DeleteAccount()
    {
        $id = $_SESSION['id'];
        $requete = $this->bdd->query("UPDATE compte SET email = 'delete' 
        WHERE compte.id = '$id';");
        $requete->execute(); 
        

    }
}
