@extends('layouts.app')

@section('title', "Listagem de Usuários")

@section('content')
    <h1>Listagem de usuários [{{ count($users) }}] - <a href="{{ route('users.create') }}">Cadastrar</a></h1>
    <br>
        <form action="{{ route('users.index') }}" method="get">
            <input type="text" name="search" placeholder="Pesquisar" id="search">
            <button>Pesquisar</button>
        </form>
    <br>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} - {{ $user->email }} | 
                <a href="{{ route('users.show', ['id' => $user->id]) }}">Detalhes</a> | 
                <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
            </li>
        @endforeach
    </ul>
@endsection