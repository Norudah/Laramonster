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

                                {!! Form::open(['route' => 'gear-add']) !!}
                                    {!! Form::token(); !!}

                                    {!! Form::label('isWeapon', "Arme ou armure ?") !!}
                                    {!! Form::select('isWeapon', [true => 'Arme', false => 'Armure'], true) !!}<br><br>

                                    {!! Form::label('name', "Nom de l'équipement") !!}
                                    {!! Form::text('name') !!}<br><br>

                                    {!! Form::label('value', "Valeur de l'équipement") !!}
                                    {!! Form::text('value') !!}<br><br>

                                    {!! Form::label('material', "Matériaux de l'équipement") !!}
                                    {!! Form::text('material') !!}<br><br>

                                    {!! Form::label('type', "Type de l'arme")!!}
                                    {!! Form::select('type', [
                                        "estoc" => 'Estoc', 
                                        "tranchante" => 'Tranchante', 
                                        "contondante" => "Contondante"], "tranchante") !!}<br><br>

                                    {!! Form::label('category', "Type de l'arme") !!}
                                    {!! Form::select('category', [
                                        "light" => 'Léger',
                                        "medium" => 'Moyenne',
                                        "heavy" => "Lourde"], "medium") !!}<br><br>
                                    
                                    {!! Form::submit('Submit') !!}<br><br>

                                {!! Form::close() !!}

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
</x-app-layout>