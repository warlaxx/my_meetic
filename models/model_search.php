<?php
require_once("../controllers/controller_search.php");


class SearchAccount
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

    public function SearchSexe()
    {
        $genre = $_POST['SearchSexe'];

        $article = $this->bdd->query("SELECT compte.sexe, prenom, nom, ville, date_naissance, loisir, age 
        FROM compte WHERE sexe LIKE '$genre'");
        $article->execute();

        $a = $article->fetch();

        if ($article->rowCount() > 0) {
            while ($a = $article->fetch()) {
                echo "<br><br>";
                echo $a['prenom'] . " " . $a['nom'];
                echo "<br><br>";
                echo $a['sexe'];
                echo "<br><br>";
                echo $a['age'];
                echo "<br><br>";
                echo $a['ville'];
                echo "<br><br>";
                echo $a['loisir'];
                echo "<br><br>";
            }
        } else {
            echo "aucune personne trouvé..";
        }
    }

    public function SearchAge()
    {
        $tranche = $_POST['SearchAge'];

        switch ($tranche) {

            case '1':
                $article = $this->bdd->query("SELECT compte.sexe, prenom, nom, ville, date_naissance, loisir, age 
        FROM compte WHERE age BETWEEN '18' AND '25'");
                break;
                $article->execute();

            case '2':
                $article = $this->bdd->query("SELECT compte.sexe, prenom, nom, ville, date_naissance, loisir, age 
        FROM compte WHERE age BETWEEN '25' AND '35'");
                $article->execute();
                break;

            case '3':
                $article = $this->bdd->query("SELECT compte.sexe, prenom, nom, ville, date_naissance, loisir, age 
                FROM compte WHERE age BETWEEN '35' AND '45'");
                $article->execute();
                break;

            case '4':
                $article = $this->bdd->query("SELECT compte.sexe, prenom, nom, ville, date_naissance, loisir, age 
        FROM compte WHERE age BETWEEN '45' AND '100'");
                $article->execute();
                break;
        }


        if ($article->rowCount() > 0) {
            while ($a = $article->fetch()) {
                echo "<br><br>";
                echo $a['prenom'] . " " . $a['nom'];
                echo "<br><br>";
                echo $a['sexe'];
                echo "<br><br>";
                echo $a['age'];
                echo "<br><br>";
                echo $a['ville'];
                echo "<br><br>";
                echo $a['loisir'];
                echo "<br><br>";
            }
        } else {
            echo "aucune personne trouvé..";
        }
    }

    public function SearchVille()
    {
        $ville = $_POST['SearchVille'];

        $article = $this->bdd->query("SELECT compte.sexe, prenom, nom, ville, date_naissance, loisir, age 
        FROM compte WHERE ville LIKE '%$ville%';");
        $article->execute();

        $a = $article->fetch();

        if ($article->rowCount() > 0) {
            while ($a = $article->fetch()) {
                echo "<br><br>";
                echo $a['prenom'] . " " . $a['nom'];
                echo "<br><br>";
                echo $a['sexe'];
                echo "<br><br>";
                echo $a['age'];
                echo "<br><br>";
                echo $a['ville'];
                echo "<br><br>";
                echo $a['loisir'];
                echo "<br><br>";
            }
        } else {
            echo "aucune personne trouvé..";
        }
    }

    public function SearchLoisir()
    {
        $loisir = $_POST['SearchLoisir'];

        $article = $this->bdd->query("SELECT compte.sexe, prenom, nom, ville, date_naissance, loisir, age 
        FROM compte WHERE loisir LIKE '%$loisir%';");
        $article->execute();

        $a = $article->fetch();

        if ($article->rowCount() > 0) {
            while ($a = $article->fetch()) {
                echo "<br><br>";
                echo $a['prenom'] . " " . $a['nom'];
                echo "<br><br>";
                echo $a['sexe'];
                echo "<br><br>";
                echo $a['age'];
                echo "<br><br>";
                echo $a['ville'];
                echo "<br><br>";
                echo $a['loisir'];
                echo "<br><br>";
            }
        } else {
            echo "aucune personne trouvé..";
        }
    }
}
