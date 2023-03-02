@extends('layouts.app')
@section('title', "Editar {$user->name}")

@section('content')
    <h1>Editar - {{ $user->name }} - <a href="{{ route('users.index') }}">Listagem</a></h1>
    
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error" style="color:#FF0000">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="name" placeholder="Nome" id="name" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="Email" id="email" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Senha" id="password">

        <button type="submit">Salvar</button>
    </form>
@endsection