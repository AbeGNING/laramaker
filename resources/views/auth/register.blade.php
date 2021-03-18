<x-main-layout>
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">

            <x-menu />

            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">

                    <div class="w-full md:w-2/3 rounded-t">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                        </form>
                    </div>

                    <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">

                        </div>

                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center ">
                                <img class="w-8 h-8 rounded-full mr-4 " src="{{ asset('img/abraham-gning.jpg') }}"
                                    alt="Abraham Gning"> <span class="text-sm">Mor Abraham</span>
                                <p class="text-gray-600 text-xs pl-3">IT & Team Lead</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-main-layout>
