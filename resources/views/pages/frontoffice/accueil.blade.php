<x-main-layout>
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">

            <x-menu />

            <div class="w-full text-xl md:text-2xl text-gray-800 leading-normal">
                <div class="flex flex-wrap h-full  overflow-hidden shadow-lg rounded-lg">
                    <div class="w-full overflow-hidden sm:w-1/2 lg:w-1/2 xl:w-1/2 ">
                        <img src="{{ asset('img/king-maker.jpg') }}" class="h-full w-full object-cover">
                    </div>

                    <div class="w-full overflow-hidden sm:w-1/2 lg:w-1/2 xl:w-1/2">
                        <div class="flex-1 bg-white  overflow-hidden shadow-lg">
                            <p class="w-full text-gray-600 text-lg md:text-2xl pt-6 px-6 pb-4 font-thin">CODE TON JOB
                            </p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6 pb-3">PHP oui, mais avec Laravel
                            </div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Bien commencer avec le framework Laravel, afin d’éviter de passer son temps à développer
                                des fonctions déjà créés par d’autres. <br>Une fois le framework maîtrisé, vous irez
                                bien beaucoup plus vite, votre code ressemblera probablement à quelque chose, et
                                surtout, la personne qui passera derrière comprendra bien plus rapidement votre code.
                                C’est important pour les maintenances, ajouts ou corrections.
                            </p>
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
