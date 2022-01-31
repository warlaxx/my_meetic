<?php
include("../controllers/controller_search.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <title>Meetic</title>
</head>


<body class="w-full h-full bg-no-repeat bg-cover bg-left bg-fixed" style="background-image: url('https://cdn.pixabay.com/photo/2017/08/06/18/05/people-2594745_1280.jpg');">

    <div>
        <nav>

            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                <div class="lg:flex lg:items-stretch lg:justify-end ml-auto">
                    <div id="menu">
                        <a class="dropdown" href="#">Menu</a>
                        <ul class="drop">
                            <li><a href="#">Acceuil</a></li>
                            <li><a href="../view/view_account.php">Mon compte</a></li>
                            <li><a href="../view/view_register.php">Se déconnecter</a></li>
                        </ul>
                    </div>
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



            <div>
                <form method="POST">

                    <div class="inline-block relative w-64">
                        <select name="SearchSexe" id="SearchSexe" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value=""></option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                            <option value="autre">Autre</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>


                    <div class="inline-block relative w-64">
                        <select name="SearchAge" id="SearchAge" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value=""></option>
                            <option value="1">18/25</option>
                            <option value="2">25/35</option>
                            <option value="3">35/45</option>
                            <option value="4">45+</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>

                    <div class="inline-block relative w-64">
                        <input type="text" id="SearchVille" name="SearchVille" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="inline-block relative w-64">
                        <input type="text" id="SearchLoisir" name="SearchLoisir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="inline-block relative w-64">
                        <input type="submit" name="valid" id="valid" value="Valider" class="text-white bg-rose-300 hover:bg-rose-400 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-300">

                    </div>
            </div>
        </nav>

        <div>

            <?php $SearchAccount->SearchSexe();
            $SearchAccount->SearchAge();
            $SearchAccount->SearchVille();
            $SearchAccount->SearchLoisir(); ?>

        </div>



        </form>
    </div>
    </div>
</body>

</html>