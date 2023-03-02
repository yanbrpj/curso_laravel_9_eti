@extends('layouts.app')
@section('title', "Editar {$user->name}")

@section('content')
    <h1>Editar - {{ $user->name }} - <a href="{{ route('users.index') }}">Listagem</a></h1>
    
    @include('includes.validations-form')

    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection