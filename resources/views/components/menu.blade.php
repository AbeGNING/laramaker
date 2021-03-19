<nav class="mt-0 w-full">
    <div class="container mx-auto flex items-center">
            
        <div class="flex w-1/2 pl-4 text-sm">
            @if (Route::has('login'))
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="mr-2">
                        <a class="inline-block text-gray-300 no-underline hover:text-gray-200 hover:no-underline py-2 px-2" href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    @auth
                        <li class="mr-2">
                            <a class="inline-block py-2 px-2 text-gray-300 no-underline hover:no-underline" href="{{ url('/home') }}">Tableau de bord</a>
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
            <a class="inline-block text-gray-300 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 text-sm" href="{{ route('smaker') }}">
                Passez Commande !
            </a>
        </div>
    </div>
</nav>

