<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Ajouter une arene</h2>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- FORM --}}
                    <form action="{{ route('add-arena') }}" method="POST">
                        @csrf
                        <label for="name">Nom de l'arene : </label>
                            <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nom" placeholder="Nom">
                        <label for="Localisation">Nom de la localication : </label>
                            <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="localisation" placeholder="Localisation">
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Envoyer !">
                    </form> 
                </div> 
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    CRUD Combats
        
                </div>
             </div>
        </div>
    </div>
</x-app-layout>