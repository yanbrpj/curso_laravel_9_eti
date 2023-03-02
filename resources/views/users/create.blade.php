@extends('layouts.app')
@section('title', "Criar Usuário")

@section('content')
    <h1>Criar Usuário - <a href="{{ route('users.index') }}">Listagem</a></h1>
    
    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post">
        @include('users._partials.form')
    </form>
@endsection