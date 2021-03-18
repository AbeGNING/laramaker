<x-main-layout>
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">

            <x-menu />

            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                <div class="flex flex-wrap overflow-hidden h-full bg-white rounded shadow-lg">

                    <div class="w-full overflow-hidden sm:w-1/2 lg:w-1/2 xl:w-1/2 md:p-10 p-5 ">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}" class=" ">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-label for="email" :value="__('Adresse email ou identifiant :')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Mot de passe :')" />

                                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                @endif

                                <x-button class="ml-3">
                                    {{ __('Connexion') }}
                                </x-button>
                            </div>
                        </form>
                    </div>

                    <div class="w-full overflow-hidden sm:w-1/2 lg:w-1/2 xl:w-1/2 ">
                        <div class="pt-16">
                            <div>
                                <span class="block text-lg">Le système d'authentification est de <span class="text-blue-600">Laravel Breeze</span>.</span>
                                <span class="block text-sm"> Une implémentation des fonctionnalités d'authentification de Laravel.</span>    
                            </div>
                           
                            <div class="pt-10">
                                <span class="block text-lg">Le scaffolding est de <span class="text-blue-600">TailwindCSS</span></span> 
                                <span class="block text-sm">Outil pour créer rapidement des sites Web modernes sans jamais quitter votre HTML.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
