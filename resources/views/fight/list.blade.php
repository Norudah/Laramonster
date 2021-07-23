<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Ajouter un matches</h2>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- FORM --}}
                    <form action="{{ route('fights-add') }}" method="POST">
                        @csrf
                        
                        <select name="user1" class="shadow appearance-none border rounded py-2 px-8 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($users as $user)
                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                            @endforeach
                        </select>

                        <b>CONTRE</b>
                        
                        <select name="user2" class="shadow appearance-none border rounded py-2 px-8 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($users as $user)    
                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                            @endforeach
                        </select>

                        <b> dans l'arène </b>

                        <select name="arena" class="shadow appearance-none border rounded py-2 px-8 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($arenas as $arena)    
                                <option value="{{ $arena->name }}">{{ $arena->name }} -<i>{{ $arena->localisation }}</i></option>
                            @endforeach
                        </select>

                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Fight!">
                    </form> 
                </div> 
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Liste des combats
                </div>
             </div>
        </div>

        @foreach ($fights as $fight)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">                    
                    <p class="text-sm">
                        Combat du 
                        <i>{{ $fight->date_at }}</i>
                        dans l'arène
                        <i class="text-indigo-500">{{ $fight->arenas }}</i>
                        <a class="pl-8" href="{{ route('fights-delete', $fight->id) }}">
                            <button type="submit" class="bg-red-500 hover:bg-green-700 text-white font-bold p-1 rounded-lg">Supprimer</button>
                        </a>                         
                    </p>
                    </br>
                    {{-- //fight->id     =>   monster->fight_id -> name --}}
                    <i class="border rounded text-blue-500">{{ $fight->users[0]->name }}</i> 
                    <b> et son monstre </b> 
                    <i class="border rounded text-blue-500">{{ $fight->monsters[0] }}</i> 
                    <b class="text-lg">CONTRE</b> 
                    <i class="border rounded text-red-500">{{ $fight->users[1]->name }}</i> 
                    <b>et son monstre </b>
                    <i class="border rounded text-red-500">{{ $fight->monsters[1] }}</i> 
                </div>                    
             </div>             
        </div>            
        @endforeach



    </div>
</x-app-layout>