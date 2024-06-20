<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a  class="nav-link active" aria-current="page"  href="{{ route('biblioteca.create') }}">Crear biblioteca </a><br>
        <a class="nav-link active" aria-current="page" href="{{ route('biblioteca.index')}}" >Ver bibliotecas</a><br>
        <a class="nav-link active" aria-current="page" href="{{ route('autor.create')}}" > Crear autor</a><br>
        <a class="nav-link active" aria-current="page" href="{{ route('tema.create')}}" >Crear tema</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
