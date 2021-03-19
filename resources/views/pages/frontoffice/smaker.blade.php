<x-main-layout>
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">
            
            <x-menu />

            <div class="w-full  leading-normal">
                <div class="h-full grid grid-cols-6 overflow-hidden shadow-lg rounded-lg bg-white p-8">

                        <div class="col-span-6 md:col-span-3">    
                            <div>
                                <div class="text-xl md:text-2xl text-blue-800 mb-8">
                                    Passer sa commande !
                                </div>
                                @if ($menus->count() > 0)
                                    <div class="">
                                        @foreach ($menus as $menu)
                                            <div class="flex  border-b border-gray-300 text-sm p-2">
                                                <a href="{{ route('commande.ajout', $menu) }}">
                                                    <svg class="w-4 h-4 mr-10  text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                    </svg>
                                                </a> 
                                                {{ $menu->titre }}
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="mt-8">
                                        {{ $menus->links() }}
                                    </div>
                                @else
                                    <p>
                                        Aucun enregistrement trouvé
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-span-6 md:col-span-3 ml-8">
                            <div class="border shadow h-96 mt-20 p-8">

                                <x-notification />
                                
                                @if ($commandes->count() > 0)
                                    
                                    <div class="">
                                        @foreach ($commandes as $commande)
                                            <div class="flex justify-between border border-gray-200 mb-3 px-3 py-1 rounded shadow">
                                                <div>{{ $commande->menu->titre}}</div>
                                                <div>
                                                    <a href="{{ route('commande.supprime', $commande) }}">
                                                        <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                @else
                                    <div class="text-lg font-medium">Vous n'avez pas encore passer commande !</div>
                                @endif
                            </div>
                        </div>
                </div>

            </div>


        </div>
    </div>

</x-main-layout>