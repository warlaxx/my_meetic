<?php
require_once("../models/model_account.php");

session_start();

$account = new Account();
$account->connect_to_db();
$account->GetId();



if (isset($_POST['Modifier'])) {
    $account->ModifyEmail();
    $account->ModifyPassword();
    $account->ModifyLoisir();
    $_SESSION['email'] = $_POST['ModifyEmail'];
}

if (isset($_POST['Delete'])) {
    $account->DeleteAccount();
    header("location:../view/view_login.php");
    
}
