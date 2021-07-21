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
                                <th class="border border-green-600">ID</th>
                                <th class="border border-green-600">Nom</th>
                                <th class="border border-green-600">Localisation</th>
                                <th class="border border-green-600">Créer le</th>
                                <th class="border border-green-600">Modifier le </th>
                                <th class="border border-green-600">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($arenas as $item)
                                <tr>
                                    <td class="border border-green-600">{{ $item->id }}</td>
                                    <td class="border border-green-600">{{ $item->name }}</td>
                                    <td class="border border-green-600">{{ $item->localisation }}</td>
                                    <td class="border border-green-600">{{ $item->created_at }}</td>
                                    <td class="border border-green-600">{{ $item->deleted_at }}</td> 
                                    <td class="border border-green-600"> 
                                        <button>Supprimer</button>
                                        <button>Modifier</button>
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