<?php
require_once("../models/model_login.php");

session_start();

if(isset($_POST['Connexion']))
{
	$utilisateur= new User_Login($_POST['email'],$_POST['password']);
    $utilisateur->connect_to_db();
    $userExist = $utilisateur->checkIfUserAlreadyExist();
    
    if ($userExist) {
        $_SESSION["email"]= $_POST['email'];
        header("location:../view/view_search.php");

    } else {
        echo '<p class="text-center text-3xl text-rose-700">Mot de passe ou email incorrect</p>';
    } 
}