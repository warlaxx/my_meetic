<?php
require_once("../models/model_register.php");

if (isset($_POST['Inscription'])) {

    $nouvel_utilisateur = new User(
        $_POST['prenom'],
        $_POST['nom'],
        $_POST['date_de_naissance'],
        $_POST['email'],
        $_POST['password'],
        $_POST['sexe'],
        $_POST['ville'],
        $_POST['loisir']
    );
    $nouvel_utilisateur->connect_to_db();


    $emailExist = $nouvel_utilisateur->checkIfEmailAlreadyExist();

    $verifyAge = $nouvel_utilisateur->add_user_to_db();

    if (!$emailExist) {
        if (!$verifyAge) {
            header("location:../view/view_login.php");
        } else {
            echo '<p class="text-center text-3xl text-rose-700">Site réservée au +18ans !</p>';
        }
    } else {
        echo '<p class="text-center text-3xl text-rose-700">Email déja utilisé</p>';
    }
}
