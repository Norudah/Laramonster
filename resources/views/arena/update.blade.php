<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Arenes') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <form action="{{ route('update-arena-stats' , $arenas->id) }}" method="get">
                    @csrf
                    <label for="name">Nom de l'arene : </label>
                        <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nom"  value="{{ $arenas->name }}">
                    <label for="Localisation">Nom de la localication : </label>
                        <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="localisation" value="{{ $arenas->localisation }}">
                    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Valider !">
                </form> 

            </div>
        </div>
</x-app-layout>