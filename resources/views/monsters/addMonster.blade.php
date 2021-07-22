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
                    {!! Form::open(['route' => 'monster-add']) !!}
                        {!! Form::token(); !!}

                        {!! Form::label('name', "Nom du monstre") !!}
                        {!! Form::text('name') !!}<br><br>

                        {!! Form::label('description', "Description") !!}
                        {!! Form::text('description') !!}<br><br>

                        {!! Form::label('faction', "Choix de la faction") !!}
                        {!! Form::select('faction', [
                                        "bleu" => 'Bleu', 
                                        "rouge" => 'rouge', 
                                        "jaune" => "Jaune"], "Jaune") !!}<br><br>

                        {!! Form::submit('update monster') !!}<br><br>
                    {!! Form::close() !!}
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>