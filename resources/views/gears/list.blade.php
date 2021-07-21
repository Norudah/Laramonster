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
                    Listing de tous les equipement
                </div>
      
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">

                                {!! Form::open(['route' => 'gear-add']) !!}
                                    {!! Form::token(); !!}

                                    {!! Form::label('isWeapon', "Arme ou armure ?") !!}
                                    {!! Form::select('isWeapon', [true => 'Arme', false => 'Armure'], true) !!}

                                    {!! Form::label('name', "Nom de l'équipement") !!}
                                    {!! Form::text('name') !!}

                                    {!! Form::label('value', "Valeur de l'équipement") !!}
                                    {!! Form::text('value') !!}

                                    {!! Form::label('material', "Matériaux de l'équipement") !!}
                                    {!! Form::text('meterial') !!}

                                    {!! Form::label('type', "Type de l'arme")!!}
                                    {!! Form::select('type', [
                                        "estoc" => 'Estoc', 
                                        "tranchante" => 'Tranchante', 
                                        "contondante" => "Contondante"], "tranchante") !!}

                                    {!! Form::label('category', "Type de l'arme") !!}
                                    {!! Form::select('category', [
                                        "light" => 'Léger',
                                        "medium" => 'Moyenne',
                                        "heavy" => "Lourde"], "medium") !!}
                                    
                                    {!! Form::submit('Submit') !!}

                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
    

            </div>
        </div>
    </div>
</x-app-layout>