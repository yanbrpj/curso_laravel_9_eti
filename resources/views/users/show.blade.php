@extends('layouts.app')

@section('title', "Detalhes: {$user->name}")

@section('content')
    <h1>Detalhes do Usuário - {{ $user->name }} - <a href="{{ route('users.index') }}">Listagem</a></h1>

    Nome: {{ $user->name }} <br>
    Email: {{ $user->email }} <br>
    Criação: {{ $user->created_at }}
    <br>
    <br>
    
    <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Deletar User</button>
    </form>
@endsection