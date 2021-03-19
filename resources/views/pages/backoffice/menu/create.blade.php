<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900"> {{ $titrePage }} </h3>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $descPage }}
                            </p>

                            @if ($menu->image <> null )
                                <div class="ring-8 ring-blue-3  00 rounded-lg shadow-lg mt-16">
                                    <img class="h-72 w-full object-cover rounded-lg " src="{{ asset('storage/'.$menu->image) }}" alt="{{ $menu->titre }}">
                                </div>
                           @endif

                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">

                        @include('pages.backoffice.menu._formulaire')
                        
                    </div>
                </div>
            </div>



        </div>
    </div>

</x-app-layout>
