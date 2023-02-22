@extends('layouts.app')
@section('title', 'criar um novo usuário')
@section('content')
    <h1>Cadastrar novo usuário</h1>

    @include('includes.validations-form')
    
    <form action="{{ route('users.store') }}" method="post">
        {{-- @csrf()
    <input type="text" name="name" placeholder="Nome:" value="{{old('name')}}">
    <input type="email" name="email" placeholder="E-mail" value="{{old('email')}}">
    <input type="password" name="password" placeholder="senha" value="{{old('password')}}">
    <button type="submit">
        Enviar
    </button> --}}
        @include('users._partials.form')
    </form>
@endsection
