@extends('layouts.app')
@section('title', "Criar Usuário")

@section('content')
    <h1>Criar Usuário</h1>
    
    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Nome" id="name">
        <input type="email" name="email" placeholder="Email" id="email">
        <input type="password" name="password" placeholder="Senha" id="password">

        <button type="submit">Cadastrar</button>
    </form>
@endsection