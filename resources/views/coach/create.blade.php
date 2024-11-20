@extends('layouts.app')
@section('conteudo')
    <form action="{{ url('coach') }}" method="POST">
        @csrf
        @method('POST')
        <div class="max-w-sm mx-auto mt-5">
            <label for="nome" class="text-white text-2xl font-bold mb-2">Nome do Treinador</label>
            <input class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            type="text" id="nome" name="nome" placeholder="Name" required />
        </div>
        <button type="submit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >Registrar Treinador</button>
@endsection