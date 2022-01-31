<?php
include("../controllers/controller_login.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Meetic - Connexion</title>
</head>

<body class="w-full h-full bg-no-repeat bg-cover bg-left bg-fixed" style="background-image: url('https://cdn.pixabay.com/photo/2017/08/06/18/05/people-2594745_1280.jpg');">
    <div class="grid place-items-center h-screen">
        <form method="POST" class="bg-rose-200 opacity-75 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
        
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium ">Email</label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium ">Mot de passe</label>
                <input type="password" id="password" name="password" minlength="8" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>

            <div class="flex items-center justify-between">
                <input type="submit" value="Connexion" name="Connexion" class="text-white bg-rose-300 hover:bg-rose-400 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-300	">
            </div>
            <div>
                <p>Vous n'avez pas de compte...? S'inscrire <a href="./view_register.php" class="text-rose-600 hover:underline dark:text-rose-600">ici</a>...</p>
            </div>
        </form>
    </div>

</body>

</html>