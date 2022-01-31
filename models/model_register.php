<?php
require_once("../controllers/controller_register.php");
// http://localhost:8888/meetic/W-PHP-501-LYN-1-1-mymeetic-abdallah.abdallaoui-maane/view/inscription.php

class User
{
    private $prenom;
    private $nom;
    private $date_de_naissance;
    private $email;
    private $password;
    private $sexe;
    private $ville;
    private $loisir;
    protected $bdd;

    public function __construct($prenom, $nom, $date_de_naissance, $email, $password, $sexe, $ville, $loisir)
    {
        $this->prenom = htmlspecialchars($prenom);
        $this->nom = htmlspecialchars($nom);
        $this->date_de_naissance = htmlspecialchars($date_de_naissance);
        $this->email = htmlspecialchars($email);
        $this->password = sha1(htmlspecialchars($password));
        $this->ville = htmlspecialchars($ville);
        $this->sexe = htmlspecialchars($sexe);
        $this->loisir = htmlspecialchars($loisir);
    }

    function connect_to_db()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=my_meetic', 'root', 'root');
            $connection = true;
        } catch (Exception $e) {
            echo "erreur de connection";
            $connection = false;
        }
    }

    public function add_user_to_db()
    {
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($this->date_de_naissance), date_create($aujourdhui));
        $age = $diff->format('%y');
        

        if ($age > 18) {
            $this->bdd->query("INSERT INTO compte (prenom, nom, date_naissance, ville, email, mot_de_passe, sexe, loisir, age) VALUES 
        ('$this->prenom', '$this->nom','$this->date_de_naissance', '$this->ville', '$this->email', '$this->password',
        '$this->sexe','$this->loisir', '$age');");
            return true;
        } else {
            return false;
        }
    }

    public function checkIfEmailAlreadyExist()
    {
        $stmt = $this->bdd->query("SELECT email FROM compte WHERE email LIKE '$this->email';");

        if ($stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function do_user_exist()
    {
    }
}
