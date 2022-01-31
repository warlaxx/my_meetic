<?php
include("../controllers/controller_register.php");
session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Meetic - inscription</title>
</head>

<body class="w-full h-full bg-no-repeat bg-cover bg-left bg-fixed" style="background-image: url('https://cdn.pixabay.com/photo/2017/08/06/18/05/people-2594745_1280.jpg');">

    <div class="grid place-items-center h-screen">
        <form method="POST" class="bg-rose-200 opacity-75 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col grid grid-cols-3 gap-4 ">
            <div>
                <div class="mb-4">
                    <label for="prenom" class="block mb-2 text-sm font-medium ">Prenom</label>
                    <input type="text" id="prenom" name="prenom" minlength="4" maxlength="24" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="Nom" class="block mb-2 text-sm font-medium ">Nom</label>
                    <input type="text" id="nom" name="nom" maxlength="24" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <div class="datepicker relative form-floating mb-3 xl:w-96">
                        <label for="date_de_naissance">Date de naissance</label>
                        <input type="date" id="date_de_naissance" name="date_de_naissance" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                    </div>
                </div>
            </div>

            <div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium ">Email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium ">Mot de passe</label>
                    <input type="password" id="password" name="password" minlength="8" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>

                <div class="mb-6">
                    <label for="ville" class="block mb-2 text-sm font-medium ">Ville</label>
                    <input type="text" list="datalist" id="ville" name="ville" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>

            <div>
                <div class="mb-6">
                    <p class="block mb-2 text-sm font-medium ">Sexe</p>
                    <div class="flex justify-center">

                        <div class="form-check form-check-inline">
                            <input type="radio" id="huey" name="sexe" value="homme" class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" required>
                            <label for="huey">Homme</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" id="dewey" name="sexe" value="femme" class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" required>
                            <label for="dewey">Femme</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" id="dewey" name="sexe" value="autre" class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" required>
                            <label for="dewey">Autre</label>
                        </div>
                    </div>
                </div>

                <div class="block mb-2 text-sm font-medium ">
                    <label for="loisir" class="block mb-2 text-sm font-medium ">Loisir</label>
                    <input type="text" list="datalist" id="loisir" name="loisir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>


                <div class="flex items-center justify-between">
                    <input type="submit" value="Inscription" name="Inscription" class="text-white bg-rose-300 hover:bg-rose-400 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-300	">
                </div>
            </div>
            <div>
                <p>Vous avez déjà un compte...? Se connecté <a href="./view_login.php" class="text-rose-600 hover:underline dark:text-rose-600">ici</a>...</p>
            </div>

        </form>
    </div>
</body>

</html>