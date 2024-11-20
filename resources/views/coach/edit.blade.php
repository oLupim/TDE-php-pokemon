@extends('layouts.app')
@section('conteudo')

<form action="{{ url('coach/'. $coach->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Nome do Treinador" value="{{ $coach->nome}}" required>
        <button type="submit">Atualizar Treinador</button>
    </form>
@endsection