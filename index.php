<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/tailwind.css" rel="stylesheet">
    <title>accueil</title>
</head>

<body class="bg-gray-900 text-gray-200 font-body">
    <?php include 'menu.php'; ?>
    <!-- head -->

    <header class="text-gray-300 bg-cover bg-center" style="background-image: url(/img/leaf.jpg)">
        <div class="container mx-auto flex px-5 pt-10 pb-20 items-center justify-center flex-col">
            <div class="text-center lg:w-2/3 w-full">
                <h2 class="text-sm text-indigo-200 uppercase tracking-widest pb-5">Les quiz de Vendredi</h2>
                <h1 class="flex flex-wrap space-x-4 justify-center items-center sm:text-4xl text-3xl mb-4 font-bold text-white font-title">
                    <div>Joue</div>
                    <span class="h-5 md:h-8 w-1 bg-white"></span>
                    <div>Triomphe</div>
                    <span class="h-5 md:h-8 w-1 bg-white"></span>
                    <div>Apprend</div>
                </h1>
                <p class="leading-relaxed text-white mb-8">Avec Quiz Vendredi améliore ta culture générale en t'amusant, lance toi
                    des défis et apprend plein de nouvelles choses. De nouveaux quiz arrivent chaque semaine.</p>
                <div class="flex justify-center">
                    <button class="rounded-md bg-gray-200 border-pink-600 shadow text-gray-700 hover:text-pink-600 font-bold py-2 px-6">
                        Explorer
                    </button>
                    <button class="rounded-md bg-gray-700 shadow text-gray-200 hover:bg-pink-600 font-bold py-2 px-6 ml-4">
                        Aléatoire
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- category -->

    <section id="category" class="bg-gray-900 sm:pt-3 sm:px-3 lg:pt-10">
        <div class="container mx-auto shadow-lg">
            <div class="bg-black shadow-xl rounded-lg p-5 md:p-8">
                <!-- text intro -->
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 mr-5">
                        <h1 class="text-white text-xl sm:text-4xl font-title">Quiz catégories</h1>
                        <div class="bg-pink-600 h-1 w-40 rounded-lg my-3"></div>
                        <p class="text-sm sm:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe praesentium quo necessitatibus
                            asperiores minus tempora, alias ullam cum voluptatum.</p>
                    </div>

                    <!-- grid -->
                    <div class="pt-5 md:pt-0 grid grid-cols-1 md:grid-cols-2 gap-4 w-full">

                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Arts & Lettres</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="image-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Nature</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="leaf-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Sciences</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="magnet-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Sports</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="tennisball-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Loisirs</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="film-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Histoire</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="finger-print-outline"></ion-icon>
                                </div>
                            </a>
                        </div>



                    </div>
                </div>
            </div>
    </section>

    <!-- Nouveauté -->
    <section id="news" class="bg-gray-900 pt-14">
        <div class="container mx-auto max-w-screen-lg">
            <div class="flex justify-center items-center px-2 pb-8 lg:pb-10">
                <h1 class="text-white text-xl sm:text-2xl font-title">Nouveau sur Avendredi</h1>
                <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 px-2">

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


    <footer>

        <!-- title -->
        <div class="container mx-auto max-w-screen-lg py-20">
            <div class="flex flex-wrap justify-around">
                <div class="w-full md:w-1/2">
                    <div class="flex justify-center bg-black rounded-lg p-8">
                        L'équipe de Vendredi vous souhaite un agréable voyage sur notre site
                    </div>

                </div>
                <div class="w-full md:w-1/2">
                    <div class="flex items-center justify-center mb-5">
                        <h2 class="text-base sm:text-lg font-title">Suivez-nous</h2>
                        <span class="ml-5"><i class="fas fa-chevron-right"></i></span>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex text-gray-400">
                            <div class="hover:text-white w-14 h-14 p-3 bg-gray-700 rounded-full text-center">
                                <i class="fab fa-instagram fa-2x"></i>
                            </div>
                            <div class="hover:text-white w-14 h-14 p-3 bg-gray-700 rounded-full text-center mx-4">
                                <i class="fab fa-twitter fa-2x"></i>
                            </div>
                            <div class="hover:text-white w-14 h-14 p-3 bg-gray-700 rounded-full text-center">
                                <i class="fab fa-facebook fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <hr class="border-1 border-gray-700">
            <div class="flex justify-center pt-5">
                <ul class="flex text-gray-400 text-sm">
                    <li class="hover:text-white hover:underline"><a href="#">Contact</a></li>
                    <li class="hover:text-white hover:underline mx-3"><a href="#">Mentions légales</a></li>
                    <li class="hover:text-white hover:underline"><a href="#">Vie privée</a></li>
                </ul>
            </div>

            <div class="flex justify-center pt-5">
                <p class="text-gray-400 text-sm">© 2021 vendredi.company</p>
            </div>

    </footer>


    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>

</html>