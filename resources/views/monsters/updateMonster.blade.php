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
                    Update monster #{{ $monster->name }}<br><br>



                    {!! Form::open(['route' => 'save']) !!}
                        {!! Form::token(); !!}
                        {!! Form::hidden('id', $monster->id) !!}

                        {!! Form::label('gear_id', 'Choose a weapons or gear') !!}
                        {!! Form::select('gear_id', $select, null, ['class'=>'form-control']) !!}<br><br>

                        {!! Form::label('name', "Nom du monstre") !!}
                        {!! Form::text('name', $monster->name) !!}<br><br>

                        {!! Form::label('description', "Description") !!}
                        {!! Form::text('description', $monster->description) !!}<br><br>

                        {!! Form::label('description', "faction") !!}
                        {!! Form::text('faction', $monster->faction) !!}<br><br>


                        {!! Form::submit('update monster') !!}
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
                        @foreach ($gearslist as $gear)
        
                            <tr>
                                <td class="border border-green-600 mx-auto">{{ $gear->id }}</td>
                                <td class="border border-green-600 mx-auto">{{ $gear->name }}</td>
                                <td class="border border-green-600 mx-auto">{{ $gear->isWeapon }}</td>
                                <td class="border border-green-600 mx-auto">{{ $gear->material }}</td>
                                <td class="border border-green-600 mx-auto">{{ $gear->type }}</td> 
                                <td class="border border-green-600 mx-auto">{{ $gear->category }}</td> 
                                <td class="border border-green-600 mx-auto"> 
                                {{-- <a class="btn btn-primary" href="{{ route('gear-delete',$gear->id) }}">Supprimer</a>    --}}
   
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