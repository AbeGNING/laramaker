<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap overflow-hidden md:-mx-1 lg:-mx-1">

                <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-2/4 lg:my-1 lg:px-1 lg:w-2/4">

                    <x-notification />

                    <div class="bg-white shadow rounded-none sm:rounded-lg overflow-hidden">
                        <div class="p-6">
                            <div
                                class="pb-3 text-base md:text-lg uppercase font-thin text-center border-b border-blue-400">
                                La Carte du Chef
                            </div>
                            @if ($menus->count() > 0)
                                <ul class="mt-8">
                                    @foreach ($menus as $menu)
                                        <li
                                            class="border-b-2 border-gray-100 mb-2 hover:border-blue-300 overflow-hidden">
                                            <a class="my-2 inline-flex" href="{{ route('menu.show', $menu)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                                </svg>
                                                <div class="text-gray-700 hover:text-gray-900 text-sm md:text-base truncate">
                                                    {{ $menu->titre }}</div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="mt-10">
                                    {{ $menus->links() }}
                                </div>
                            @else
                                Resto pas ouvert today !
                            @endif
                        </div>
                    </div>
                </div>

                <div class="w-full overflow-hidden  md:my-1 md:px-1 md:w-2/4 lg:my-1 lg:px-1 lg:w-2/4">

                    <div class="ml-5 mr-5 md:mr-0 mt-10 md:mt-0">
                        <div class="max-w-md mx-auto border rounded-xl overflow-hidden md:max-w-2xl hover:bg-white hover:shadow-md hover:border-0">
                            <a href="{{ route('menu.show', $choixdujour) }}">
                                <div class="md:flex">
                                    <div class="md:flex-shrink-0">
                                        <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/'.$choixdujour->image) }}" alt="{{ $choixdujour->titre }}">
                                    </div>
                                    <div class="p-8">
                                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold pb-4">Le choix
                                            des clients</div>
                                            <div class="truncate"> {{ $choixdujour->titre }} </div>
                                            <p class="mt-2 text-gray-500 overflow-ellipsis overflow-hidden"> {{ substr($choixdujour->description, 0, 80) }}...</p>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="bg-white  mt-5 sm:mt-14">
                            <div
                                class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                                <h2 class="text-lg font-extrabold tracking-tight text-gray-900 sm:text-2xl">
                                    <span class="block">Vous avez faim ?</span>
                                    <span class="block text-indigo-600 font-thin">C'est le moment de commander !</span>
                                </h2>
                                <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                                    <div class="inline-flex rounded-md shadow">
                                        <a href="{{ route('commande.create') }}"
                                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-800 focus:ring-4 focus:ring-offset-blue-400">
                                           Commandez
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



</x-app-layout>
