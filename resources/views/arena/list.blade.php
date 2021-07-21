<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Arenes
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    Ajouter une Arene
                    {!! Form::open(['controller' => 'controller/ArenaController']) !!}
                        <div class="p-6 bg-white border-b border-gray-200">
                                 Nom de l'arene
                            {!!  Form::text('arenaName'); !!}
                            Localisation de l'arene 
                            {!!  Form::text('arenaLocalisation'); !!}
                            {!!  Form::submit('Ajouter !'); !!}
                        </div>
                    {!! Form::close() !!}
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
                                        <button class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                                        <button class="bg-blue-500 hover:bg-black-700 text-white font-bold py-2 px-4 rounded">Modifier</button>
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