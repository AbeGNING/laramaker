<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Menu
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 md:col-span-4">
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                {{ $menu->titre }}
                            </h3>
                            {{-- <p class="mt-1 max-w-2xl text-sm text-gray-500">
                               Menu
                            </p> --}}
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Prix de vente
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $menu->prix }} XOF
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Presentation
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $menu->description }}
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Ingrédients
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{ $menu->ingredients }}
                                    </dd>
                                </div>
                                
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 md:col-span-2">
                    <div class="ring-8 ring-blue-200 rounded-lg shadow-lg mt-2">
                        <img class="h-72 w-full object-cover rounded-lg " src="{{ asset('storage/'.$menu->image) }}" alt="{{ $menu->titre }}">
                    </div>
                </div>
            </div>
            
            <div class="mt-8 lg:mt-6 lg:flex-shrink-0">
                
                <div class="inline-flex rounded-md shadow">
                  <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center border border-transparent text-sm rounded-md text-blue-900 bg-gray-300 hover:bg-gray-200 px-3 py-2 focus:ring-4 focus:ring-offset-blue-500">
                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                      </svg>
                    Retour
                  </a>
                </div>
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('commandez') }}" class="inline-flex items-center justify-center border border-transparent text-sm rounded-md text-white bg-blue-800 hover:bg-red-900 px-3 py-2 focus:ring-4 focus:ring-offset-blue-500">
                      <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Commander
                    </a>
                  </div>

                <div class="float-right">
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ route('menu.edit', $menu) }}" class="inline-flex items-center justify-center border border-transparent text-sm rounded-md text-blue-900 bg-white hover:bg-blue-200 px-3 py-2 focus:ring-4 focus:ring-offset-blue-500">
                            <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                              </svg>
                            Edition
                        </a>
                      </div>
                      <div class="ml-3 inline-flex rounded-md shadow">
                          <a href="{{ route('menu.destroy', $menu) }}" class="inline-flex items-center justify-center border border-transparent text-sm rounded-md text-white bg-blue-600 hover:bg-blue-700 px-3 py-2 focus:ring-4 focus:ring-offset-blue-500">
                            <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>      
                            Supression
                            </a>
                      </div>
                </div>
              </div>

            
        </div>
    </div>




</x-app-layout>
