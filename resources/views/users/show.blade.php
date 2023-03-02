@extends('layouts.app')

@section('title', "Detalhes: {$user->name}")

@section('content')
    <h1>Detalhes do Usuário - {{ $user->name }}</h1>

    Nome: {{ $user->name }} <br>
    Email: {{ $user->email }} <br>
    Criação: {{ $user->created_at }}
@endsection