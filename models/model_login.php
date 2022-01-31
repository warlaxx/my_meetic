<?php
require_once("../controllers/controller_login.php");

class User_Login
{
    private $email;
    private $password;
    protected $bdd;

    public function __construct($email, $password)
    {
        $this->email = htmlspecialchars($email);
        $this->password = htmlspecialchars($password);
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

    public function checkIfUserAlreadyExist()
    {
        $stmt = $this->bdd->query("SELECT compte.email, compte.mot_de_passe FROM compte 
        WHERE email LIKE '$this->email' AND mot_de_passe LIKE sha1('$this->password');");
        // var_dump($this->bdd->errorInfo());

        if ($stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function GetidAccount(){
        
    }
}
