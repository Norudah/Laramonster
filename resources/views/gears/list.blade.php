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

      
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">

                                <h1 class="text-5xl	">Ajouter un équipement</h1><br><br>

                                <form action="{{ route('gear-add') }}" method="POST">
                                    @csrf

                                    <label for="isWeapon">Arme ou Armure ?</label>
                                    <select name="isWeapon">
                                        <option selected value="1">Arme</option>
                                        <option value="0">Armure</option>
                                    </select><br><br>

                                    <label for="name">Nom</label>
                                    <input type="text" name="name"><br><br>

                                    <label for="value">Valeur</label>
                                    <input type="text" name="value"><br><br>

                                    <label for="material">Matériaux</label>
                                    <input type="text" name="material"><br><br>

                                    <label for="type">Type de l'arme</label>
                                    <select name="type">
                                        @foreach ($types as $key => $value )  
                                            <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select><br><br>

                                    <label for="category">Type de l'arme</label>
                                    <select name="category">
                                        @foreach ($categories as $key => $value )
                                            <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select><br><br>

                                    <button class="button" type="submit">Enregistrer les modifications</button>

                                </form>

                                <br><br><br>

                                <table class="border-collapse border border-green-800 table-auto">
                                    <thead>
                                        <tr>
                                            <th class="border border-green-600 mx-auto">ID</th>
                                            <th class="border border-green-600 mx-auto">Nom</th>
                                            <th class="border border-green-600 mx-auto">Classe</th>
                                            <th class="border border-green-600 mx-auto">Matière</th>
                                            <th class="border border-green-600 mx-auto">Type</th>
                                            <th class="border border-green-600 mx-auto">Categorie</th>
                                            <th class="border border-green-600 mx-auto">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gears as $gear)
                        
                                            <tr>
                                                <td class="border border-green-600 mx-auto">{{ $gear->id }}</td>
                                                <td class="border border-green-600 mx-auto">{{ $gear->name }}</td>
                                                <td class="border border-green-600 mx-auto">{{ $gear->isWeapon }}</td>
                                                <td class="border border-green-600 mx-auto">{{ $gear->material }}</td>
                                                <td class="border border-green-600 mx-auto">{{ $gear->type }}</td> 
                                                <td class="border border-green-600 mx-auto">{{ $gear->category }}</td> 
                                                <td class="border border-green-600 mx-auto"> 
                                                    {{-- <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                                                    <button class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Modifier</button> --}}
                                                    
                                                        <a class="btn btn-info" href="{{ route('gear-modify',$gear->id) }}">Modifier</a>    
                                                        <a class="btn btn-primary" href="{{ route('gear-delete',$gear->id) }}">Supprimer</a>   
                                                           
                                                   
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>
    

                </div>
            </div>
        </div>
    </div>

    @push("body-scripts")
        <script>



        </script>
    @endpush
</x-app-layout>