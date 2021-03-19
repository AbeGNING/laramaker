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
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <div class="w-full m-0 p-0 bg-cover bg-bottom bg-gradient-to-r from-blue-900 to-blue-500 pt-10 pb-40">
        <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
            <p class="text-white font-extrabold text-3xl md:text-5xl">
               LaraMaker
            </p>
            <p class="text-xl md:text-2xl text-gray-300">Les bonnes pratiques en Laravel</p>
        </div>
    </div>

    <main>
        {{ $slot }}
    </main>

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