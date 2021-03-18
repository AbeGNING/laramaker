<x-auth-validation-errors class="mb-4" :errors="$errors" />

@if (Route::current()->getName() === 'menu.create')
    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
@else
    <form  method="POST" action="{{ route('menu.update', $menu) }}" enctype="multipart/form-data"> 
        {{ method_field('PUT') }}
@endif

        @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
                        <x-label for="titre" :value="__('Désignation :')" />
                        <x-input id="titre" class="block mt-1 w-full" type="text" name="titre"
                            :value="old('titre') ?? $menu->titre" required autofocus />
                    </div>
                    <div class="col-span-6 md:col-span-2">
                        <label for="prix" class="block text-sm font-medium text-gray-700"> Prix :
                        </label>
                        <div class="mt-1 inline-flex">
                            <input type="number"
                                class="block w-full flex-1 rounded rounded-r-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300"
                                name="prix" value="{{ old('prix') ?? $menu->prix }}" {{ $required }} >
                            <div class="border-t border-b border-r border-gray-300 rounded-r  bg-gray-100">
                                <div class="text-sm p-2">XOF</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 md:col-span-3">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description :</label>
                        <div class="mt-1">
                            <textarea name="description" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" {{ $required }}>{{ old('description') ?? $menu->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-span-6 md:col-span-3">
                        <label for="ingredients" class="block text-sm font-medium text-gray-700">Ingredients : </label>
                        <div class="mt-1">
                            <textarea name="ingredients" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" {{ $required }}>{{ old('ingredients') ?? $menu->ingredients }}</textarea>
                        </div>
                    </div>

                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Photo de menu :
                    </label>

                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="image"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Télécharger un fichier</span>
                                    <input id="image" name="image" type="file" class="sr-only" {{ $required }}>
                                </label>
                                <p class="pl-1">ou glisser-déposer</p>
                            </div>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, GIF jusqu'à 10MB
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="">
                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                      Annuler</a>
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    Valider
                </button>
            </div>
        </div>
    </form>
