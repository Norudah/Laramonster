<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Arenes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Ajouter une arene</h2>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    {{-- FORM --}}
                    <form action="{{ route('add') }}" method="POST">
                        {{ csrf_field() }}
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
                    CRUD Arenes
        
                    <table class="border-collapse border border-green-800 table-auto">
                        <thead>
                            <tr>
                                <th class="border border-green-600 mx-auto">ID</th>
                                <th class="border border-green-600 mx-auto">Nom</th>
                                <th class="border border-green-600 mx-auto">Localisation</th>
                                <th class="border border-green-600 mx-auto">Créer le</th>
                                <th class="border border-green-600 mx-auto">Modifier le </th>
                                <th class="border border-green-600 mx-auto">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($arenas as $item)
                                <tr>
                                    <td class="border border-green-600 mx-auto">{{ $item->id }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $item->name }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $item->localisation }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $item->created_at }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $item->deleted_at }}</td> 
                                    <td class="border border-green-600 mx-auto"> 
                                            
                                        <a href="{{ route('delete', $item->id) }}">
                                            <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                                        </a>    
                                            <button class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Modifier</button>
                                        
                                     </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
             </div>
        </div>
    </div>
</x-app-layout>