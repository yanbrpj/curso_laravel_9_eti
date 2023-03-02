@extends('layouts.app')
@section('title', "Criar Usuário")

@section('content')
    <h1>Criar Usuário</h1>
    
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error" style="color:#FF0000">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Nome" id="name" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email" id="email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Senha" id="password">

        <button type="submit">Cadastrar</button>
    </form>
@endsection