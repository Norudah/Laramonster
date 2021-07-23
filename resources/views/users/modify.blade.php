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

                                <h1 class="text-5xl">Modifier un Utilisateur</h1><br><br>

                                <form action="{{ route('user-modify-persist', $user->id) }}" method="POST">
                                    @csrf

                                    <label for="name">Nom</label>
                                    <input type="text" name="name" value="{{ $user->name }}">

                                    <label for="email">Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}">

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