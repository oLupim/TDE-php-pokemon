@extends('layouts.app')
    
@section('conteudo')
    <div class="max-w-sm mx-auto mt-5">
        @foreach($pokemon as $entidade)
            <div class="mb-5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 border-2 border-blue-400 rounded-lg p-5 flex flex-col items-center shadow-xl relative">
                <h3 class="text-white text-2xl font-bold mb-2">{{ $entidade->nome }}</h3>
                
                <div class="bg-gray-800 rounded-md px-4 py-2 w-full text-center">
                    <p class="text-blue-500 text-sm font-semibold">{{ $entidade->tipo }}</p>
                    <p class="text-white text-m mt-1">Força: {{ $entidade->pontos_de_poder }}</p>
                </div>


                <div class="flex space-x-4">
                    <a class="mt-3 bg-white hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" href="{{ url('pokemon/'.$entidade->id.'/edit') }}">Editar</a>
                    <form action="{{ url('pokemon/'.$entidade->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="mt-3 border 2 border-white hover:bg-white hover:text-gray-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2.5 text-center text-white" type="submit">Deletar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection

