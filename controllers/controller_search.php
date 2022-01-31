<?php
require_once("../models/model_search.php");

if (isset($_POST['valid'])) {
    $SearchAccount = new SearchAccount();
    $SearchAccount->connect_to_db();
}
