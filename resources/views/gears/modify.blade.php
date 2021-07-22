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

                                <form action="{{ route('gear-modify-persist', $gear->id) }}" method="POST">
                                    @csrf

                                    <label for="isWeapon">Arme ou Armure ?</label>
                                    <select name="isWeapon">
                                        <option value="1">Arme</option>
                                        <option value="0">Armure</option>
                                    </select>

                                    <label for="name">Nom</label>
                                    <input type="text" name="name" value="{{ $gear->name }}">

                                    <label for="value">Valeur</label>
                                    <input type="text" name="value" value="{{ $gear->value }}">

                                    <label for="material">Matériaux</label>
                                    <input type="text" name="material" value="{{ $gear->material }}">

                                    <label for="type">Type de l'arme</label>
                                    <select name="type">
                                        @foreach ($types as $key => $value )
                                            @if ($value === $gear->type)
                                                <option selected value="{{ $value }}">{{ $key }}</option>
                                            @else
                                                <option value="{{ $value }}">{{ $key }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <label for="category">Type de l'arme</label>
                                    <select name="category">
                                        @foreach ($categories as $key => $value )
                                            @if ($value === $gear->category)
                                                <option selected value="{{ $value }}">{{ $key }}</option>
                                            @else
                                                <option value="{{ $value }}">{{ $key }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <button type="submit">Enregistrer les modifications</button>

                                </form>

                                

                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>