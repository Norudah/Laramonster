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
                    <h1 class="text-5xl	">Utilisateur</h1><br><br>

                    <table class="border-collapse border border-green-800 table-auto">
                        <thead>
                            <tr>
                                <th class="border border-green-600 mx-auto">ID</th>
                                <th class="border border-green-600 mx-auto">Nom</th>
                                <th class="border border-green-600 mx-auto">Email</th>
                                <th class="border border-green-600 mx-auto">Crée le</th>
                                <th class="border border-green-600 mx-auto">Mis à jour le</th>
                                <th class="border border-green-600 mx-auto">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)

                                <tr>
                                    <td class="border border-green-600 mx-auto">{{ $user->id }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $user->name }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $user->email }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $user->created_at }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $user->updated_at }}</td> 
                                    <td class="border border-green-600 mx-auto"> 
                                            <a class="btn btn-info" href="{{ route('user-modify', $user->id) }}">Modifier</a>    
                                            <a class="btn btn-primary" href="{{ route('user-delete', $user->id) }}">Supprimer</a>    
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