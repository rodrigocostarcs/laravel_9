@extends('layouts.app')
@section('title', 'criar um novo usuário')
@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Novo Usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data"> <!-- user este multipart para permitir upload de arquivo -->
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
