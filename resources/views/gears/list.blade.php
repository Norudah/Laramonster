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
                                {!! Form::open(['url' => 'foo/bar']) !!}
                                    <?php 

                                    echo Form::token();

                                    echo Form::label('isWeapon', "Arme ou armure ?");
                                    echo Form::select('isWeapon', [true => 'Arme', false => 'Armure'], true);

                                    echo Form::label('name', "Nom de l'équipement");
                                    echo Form::text('name');

                                    echo Form::label('value', "Valeur de l'équipement");
                                    echo Form::text('value');

                                    echo Form::label('material', "Matériaux de l'équipement");
                                    echo Form::text('meterial');

                                    // TODO : only show if it is weapon
                                    echo Form::label('type', "Type de l'arme");
                                    echo Form::select('type', [
                                        "estoc" => 'Estoc', 
                                        "tranchante" => 'Tranchante', 
                                        "contondante" => "Contondante"], "tranchante");

                                    echo Form::label('category', "Type de l'arme");
                                    echo Form::select('category', [
                                        "light" => 'Léger',
                                        "medium" => 'Moyenne',
                                        "heavy" => "Lourde"], "medium");

                                    echo Form::submit('Submit');
                                    
                                    ?>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
    

            </div>
        </div>
    </div>
</x-app-layout>