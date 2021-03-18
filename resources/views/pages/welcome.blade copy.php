<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="author" content="Abraham GNING">
    <meta name="description" content="Bien commencer avec Laravel à Switch Maker">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custum.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <div class="w-full m-0 p-0 bg-cover bg-bottom bg-gradient-to-r from-blue-900 to-blue-500 pt-10 pb-40">
        <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
            <p class="text-white font-extrabold text-3xl md:text-5xl">
               LaraMaker
            </p>
            <p class="text-xl md:text-2xl text-gray-300">Les bonnes pratiques de Laravel</p>
        </div>
    </div>

    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">
            <nav class="mt-0 w-full">
                <div class="container mx-auto flex items-center">
                    <div class="flex w-1/2 pl-4 text-sm">
                        @if (Route::has('login'))
                            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                                @auth
                                    <li class="mr-2">
                                        <a class="inline-block py-2 px-2 text-gray-300 no-underline hover:no-underline" href="{{ url('/home') }}">Accueil</a>
                                    </li>
                                @else    
                                    <li class="mr-2">
                                        <a class="inline-block text-gray-300 no-underline hover:text-gray-200 hover:no-underline py-2 px-2" href="{{ route('login') }}">Connexion</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="mr-2">
                                            <a class="inline-block text-gray-300 no-underline hover:text-gray-200 hover:no-underline py-2 px-2" href="{{ route('register') }}">Inscription</a>
                                        </li>
                                    @endif
                                @endauth
                            </ul>
                        @endif
                    </div>


                    <div class="flex w-1/2 justify-end content-center">
                        <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 text-sm" href="#">
                            Switch Maker la
                        </a>
                    </div>
                </div>
            </nav>

            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                    {{-- <a href="#!" class="flex flex-wrap no-underline hover:no-underline"> --}}
                        <div class="w-full md:w-2/3 rounded-t">
                            <img src="{{ asset('img/king-maker.jpg') }}" class="h-full w-full shadow">
                        </div>

                        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <p class="w-full text-gray-600 text-lg md:text-2xl pt-6 px-6 pb-4 font-thin">CODE TON JOB</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6 pb-3">PHP oui, mais avec Laravel </div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Bien commencer avec le framework Laravel, afin d’éviter de passer son temps à développer des fonctions déjà créés par d’autres. <br>Une fois le framework maîtrisé, vous irez bien beaucoup plus vite, votre code ressemblera probablement à quelque chose, et surtout, la personne qui passera derrière comprendra bien plus rapidement votre code. C’est important pour les maintenances, ajouts ou corrections.
                                </p>
                            </div>

                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                <div class="flex items-center ">
                                    <img class="w-8 h-8 rounded-full mr-4 " src="{{ asset('img/abraham-gning.jpg') }}" alt="Abraham Gning"> <span class="text-sm">Mor Abraham</span>
                                    <p class="text-gray-600 text-xs pl-3">IT & Team Lead</p>
                                </div>
                            </div>
                        </div>

                    {{-- </a> --}}
                </div>

                {{-- <div class="flex flex-wrap justify-between pt-12 -mx-6">
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 " data-tippy-content="Author Name" src="http://i.pr.cc/300" alt=" of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 " data-tippy-content="Author Name" src="http://i.pr.cc/300" alt=" of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/539527/800x600" class="h-64 w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full  font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 " data-tippy-content="Author Name" src="http://i.pr.cc/300" alt=" of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/3657445/800x600" class="h-full w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 " data-tippy-content="Author Name" src="http://i.pr.cc/300" alt=" of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/764827/800x600" class="h-full w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 " data-tippy-content="Author Name" src="http://i.pr.cc/300" alt=" of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/325867/800x600" class="h-full w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 " data-tippy-content="Author Name" src="http://i.pr.cc/300" alt=" of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                                <img src="https://source.unsplash.com/collection/1118905/800x600" class="h-full w-full rounded-t pb-6">
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                                <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                                <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                    Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                                </p>
                            </a>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <img class="w-8 h-8 rounded-full mr-4 " data-tippy-content="Author Name" src="http://i.pr.cc/300" alt=" of Author">
                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            {{-- <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
                <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>
                <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts delivered right to your inbox</h3>
                <div class="w-full text-center pt-4">
                    <form action="#">
                        <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                            <input type="email" placeholder="youremail@example.com" class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                            <button type="submit" class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div> --}}

            {{-- <div class="flex w-full items-center font-sans p-8 md:p-24">
                <img class="w-10 h-10 rounded-full mr-4" src="http://i.pr.cc/300" alt=" of Author">
                <div class="flex-1">
                    <p class="text-base font-bold text-base md:text-xl leading-none">Ghostwind CSS</p>
                    <p class="text-gray-600 text-xs md:text-base">Tailwind CSS version of Ghost's Casper theme by <a class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
                </div>
                <div class="justify-end">
                    <button class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read More</button>
                </div>
            </div> --}}
        </div>
    </div>

    <footer class="bg-gray-900 mt-24">
        <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

            <div class="w-full mx-auto flex flex-wrap items-center">
                <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-thin">
                    <a class=" text-lg text-gray-100 no-underline hover:text-gray-300 hover:no-underline" href="#">
                        KingMaker  <span class="text-base text-gray-200">Design</span>
                    </a>
                </div>
                <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                    <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:no-underline py-2 px-3" href="#">Laravel</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:no-underline py-2 px-3" href="#">Tailwind</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:no-underline py-2 px-3" href="#">Breeze</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>