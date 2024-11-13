@extends('layouts.app')

@section('conteudo')
    
<form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="max-w-sm mx-auto mb-5 p-5 border rounded-lg">
        
        <input type="text" name="nome" placeholder="Nome" value="{{ $pokemon->nome }}" required
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        >

        <input type="text" name="tipo" placeholder="Tipo" value="{{ $pokemon->tipo }}" required
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        >

        <input type="number" name="pontos_de_poder" placeholder="Pontos de Força" value="{{ $pokemon->pontos_de_poder }}" required
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        >
        
        <button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >Editar Pokemon</button>
    </div>
</form>

@endsection