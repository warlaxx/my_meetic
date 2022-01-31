<?php
include("../controllers/controller_account.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Meetic - Mon compte</title>
</head>

<body class="w-full h-full bg-no-repeat bg-cover bg-left bg-fixed" style="background-image: url('https://cdn.pixabay.com/photo/2017/08/06/18/05/people-2594745_1280.jpg');">

    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div id="menu" class="lg:flex lg:items-stretch lg:justify-end ml-auto">
            <a class="dropdown" href="#">Menu</a>
            <ul class="drop">
                <li><a href="../view/view_search.php">Acceuil</a></li>
                <li><a href="#">Mon compte</a></li>
                <li><a href="../view/view_register.php">Se déconnecter</a></li>
            </ul>
        </div>

        <script>
            $(function() {
                $('.dropdown').click(function() {
                    $(this).next('.drop').slideToggle();
                });

                $(document).click(function(e) {
                    var target = e.target;
                    if (!$(target).is('.dropdown') && !$(target).parents().is('.dropdown')) {
                        $('.drop').slideUp();
                    }
                });
            });
        </script>
    </div>

    <div class="grid place-items-center h-screen">

        <div class="bg-rose-200 opacity-75 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col grid grid-cols-2 gap-4">
            <div>
                <div class="mb-6 text-4xl italic font-bold">
                    <h1>Votre compte</h1>
                </div>

                <div class="mb-6">
                    <p class="block mb-2 text-sm font-medium ">Nom </p>
                    <p><?php $account->nom($nom_aff);
                        ?></p>
                </div>

                <div class="mb-6">
                    <p class="block mb-2 text-sm font-medium ">Prenom </p>
                    <p><?php $account->prenom($prenom_aff);
                        ?></p>
                </div>

                <div class="mb-6">
                <p class="block mb-2 text-sm font-medium ">Votre Email </p>
                    <p><?php $account->mail($mail_aff);
                        ?></p>
                </div>

                <div class="mb-6">
                <p class="block mb-2 text-sm font-medium ">Genre </p>
                    <p><?php $account->genre($genre_aff);
                        ?></p>
                </div>

                <div class="mb-6">
                <p class="block mb-2 text-sm font-medium ">Loisir </p>
                    <p><?php $account->loisir($loisir_aff);
                        ?></p>
                </div>
            </div>

            <div>
                <form method="POST">
                    <div class="mb-6 text-4xl italic font-bold">
                        <h1>Modifier votre compte</h1>
                    </div>

                    <div class="mb-6">
                    <p class="block mb-2 text-sm font-medium ">Modifier votre email </p>
                        <input type="email" id="ModifyEmail" name="ModifyEmail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <p class="block mb-2 text-sm font-medium ">Modifier votre mot de passe </p>
                        <input type="password" id="ModifyPassword" name="ModifyPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <p class="block mb-2 text-sm font-medium ">Modifier vos loisir </p>
                        <input type="text" id="ModifyLoisir" name="ModifyLoisir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <br>
                        <input type="submit" value="Modifier" name="Modifier" class="text-white bg-rose-300 hover:bg-rose-400 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-300	">
                    </div>

                    <div class="mb-6">
                        <button name="Delete" class="text-white bg-rose-300 hover:bg-rose-400 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-300	">Supprime votre compte</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>