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

                        <h1 class="text-5xl	">Ajouter d'un monster</h1><br><br>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <br><br><br>

                        {!! Form::open(['route' => 'monster-add']) !!}
                            {!! Form::token(); !!}

                            {!! Form::label('name', "Nom du monstre") !!}
                            {!! Form::text('name') !!}<br><br>

                            {!! Form::label('type', "Choix de la diet") !!}
                            {!! Form::select('type', [
                                            "tarentula" => 'Tarentula', 
                                            "cyclope" => 'Cyclope', 
                                            "vampire" => 'Vampire', 
                                            "critters" => "Critters"], "Cyclope") !!}<br><br>

                            {!! Form::label('description', "Description") !!}
                            {!! Form::text('description') !!}<br><br>

                            {!! Form::label('diet', "Choix de la diet") !!}
                            {!! Form::select('diet', [
                                            "veggie" => 'Veggie', 
                                            "canibalisme" => 'Canibalisme', 
                                            "carnivore" => 'Carnivore', 
                                            "omnivore" => "Omnivore"], "Omnivore") !!}<br><br>

                            {!! Form::label('faction', "Choix de la faction") !!}
                            {!! Form::select('faction', [
                                            "bleu" => 'Bleu', 
                                            "rouge" => 'rouge', 
                                            "jaune" => "Jaune"], "Jaune") !!}<br><br>

                            {!! Form::submit('Submit') !!}<br><br>
                            
                        {!! Form::close() !!}

                        <br><br><br>
                        
                    <table class="border-collapse border border-green-800 table-auto">
                        <thead>
                            <tr>
                                <th class="border border-green-600 mx-auto">Nom</th>
                                <th class="border border-green-600 mx-auto">description</th>
                                <th class="border border-green-600 mx-auto">type</th>
                                <th class="border border-green-600 mx-auto">height</th>
                                <th class="border border-green-600 mx-auto">isDead</th>
                                <th class="border border-green-600 mx-auto">diet</th>
                                <th class="border border-green-600 mx-auto">User</th>
                                <th class="border border-green-600 mx-auto">Gear</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($monsters as $monster)
                                <tr>
                                    <td class="border border-green-600 mx-auto">{{ $monster->name }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $monster->description }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $monster->type }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $monster->height }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $monster->isDead }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $monster->diet }}</td>
                                    <td class="border border-green-600 mx-auto">{{ $monster->user->name }}</td>
                                    <td class="border border-green-600 mx-auto"> 
                                        {{-- <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                                        <button class="bg-blue-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Modifier</button> --}}
                                        <a class="btn btn-info" href="{{ route('update', $monster->id) }}">Modifier</a>    
                                        <a class="btn btn-primary" href="{{ route('delete', $monster->id) }}">Supprimer</a>   
                                                
                                        
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