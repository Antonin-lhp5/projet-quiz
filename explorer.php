<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Quiz work</title>
    <style></style>
</head>

<body class="bg-gray-900 text-gray-200 font-body">

    <?php include 'menu.php'; ?>

    <header class="container mx-auto max-w-screen-lg py-5 px-5">

        <nav class="flex flex-col sm:flex-row sm:justify-between sm:items-baseline">
            <div class="flex justify-between">
                <div class="text-light space-x-4 flex">
                    <a href="index.html" class="hover:text-white">Accueil</a>
                    <a href="decouvrir.html" class="hover:text-white border-green-500 border-b-2">Découvrir</a>
                </div>
                <!-- champ mobile -->
                <button id="menu-btn" class="block flex sm:hidden outline-none focus:outline-none ml-3">
                    <span class="text-light">
                        Recherche
                    </span>
                    <svg class="w-5 h-5 left-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
            <!-- search mobile -->
            <div id="dropdown" class="block hidden sm:hidden relative bg-gray-800 p-2 mt-4 rounded border-2 border-green-500 flex w-full items-stretch">
                <svg id="searchicon" class="w-5 h-5 absolute left-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" id="searchfield" class="ml-6 bg-transparent text-sm outline-none focus:outline-none focus:shadow-outline w-full pl-2" placeholder="Rechercher un quiz">
            </div>
            <!-- champ lg -->
            <div class="hidden sm:block relative bg-gray-800 mx-12 p-2 rounded border-2 border-green-500 flex w-full items-stretch">

                <svg class="w-5 h-5 absolute left-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" class="ml-6 bg-transparent text-sm outline-none focus:outline-none focus:shadow-outline w-full pl-2" placeholder="Rechercher un quiz">
            </div>

            </div>
            <!-- logo -->
            <h1 class="order-first sm:order-last self-center sm:self-auto pb-3 sm:pb-0 text-xl sm:text-2xl font-bold tracking-wide">
                Vendredi.</h1>
        </nav>

    </header>



    <main id="news" class="bg-gray-900 pt-14">
        <div class="container mx-auto max-w-screen-xl">
           
            <!-- menu catégorie -->
            <div class="flex items-baseline justify-between pt-2 pb-5 px-3 md:px-20">

                <div class="flex text-sm md:text-base items-center">

                    <h2 class="">Catégorie</h2><span class="ml-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg></span>

                </div>

                <div>
                    <div class="flex md:hidden px-2 py-1">
                        <h2 class="text-sm md:text-base">Arts et Lettres</h2>
                        <span class="ml-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="flex space-x-4 hidden md:block">
                    <a href="#">TOUT</a>
                    <a href="#">Nature</a>
                    <a href="#">Sciences</a>
                    <a href="#">Arts et Lettres</a>
                    <a href="#">Histoire</a>
                    <a href="#">Loisirs</a>
                    <a href="#">Sports</a>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 px-2 mx-16">

                <div>
                    <a href="" class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gameconsole.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Loisirs</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Nos
                                anciennes consoles de jeux vidéos !</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/rabbit.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                lapins et leurs terriers</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gazelle.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                proies des prédateurs</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/victorhugo.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Arts et Lettres</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Connaissez-vous Victor Hugo ?</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/volcan.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Science</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                différents volcans et leurs présences géographiques</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/greek.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Histoire</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                mythes de la grèce antique</h2>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="" class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gameconsole.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Loisirs</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Nos
                                anciennes consoles de jeux vidéos !</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/rabbit.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                lapins et leurs terriers</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gazelle.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                proies des prédateurs</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/victorhugo.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Arts et Lettres</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Connaissez-vous Victor Hugo ?</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/volcan.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Science</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                différents volcans et leurs présences géographiques</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/greek.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Histoire</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                mythes de la grèce antique</h2>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="" class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gameconsole.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Loisirs</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Nos
                                anciennes consoles de jeux vidéos !</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/rabbit.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                lapins et leurs terriers</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gazelle.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                proies des prédateurs</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/victorhugo.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Arts et Lettres</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Connaissez-vous Victor Hugo ?</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/volcan.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Science</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                différents volcans et leurs présences géographiques</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/greek.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Histoire</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                mythes de la grèce antique</h2>
                        </div>
                    </a>
                </div>


                <!-- end galerie -->
            </div>
        </div>
        </section>


        <script>
            const menuBtn = document.querySelector('#menu-btn')
            const dropdown = document.querySelector('#dropdown')
            let searchfield = document.getElementById('searchfield');
            let searchicon = document.getElementById('searchicon');

            menuBtn.addEventListener('click', () => {
                if (dropdown.classList.contains('hidden')) {
                    dropdown.classList.remove('hidden');
                    searchfield.focus();
                    // dropdown.classList.add('flex');
                } else {

                    dropdown.classList.add('hidden')
                }
            });



            // Detect all clicks on the document
            document.addEventListener('click', function(event) {
                // If user clicks inside the element, do nothing
                if (event.target.closest('#menu-btn') || event.target.id == "searchfield" || event.target.id ==
                    "searchicon") return
                // If user clicks outside the element, hide it!
                dropdown.classList.add('hidden')
            })
        </script>
</body>

</html>