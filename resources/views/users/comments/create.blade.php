@extends('layouts.app')
@section('title', "criar um novo comentário para o usuário {$user->name}")
@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">criar um novo comentário para o usuário {{$user->name}}</h1>

    @include('includes.validations-form')

    <form action="{{ route('comments.store',$user->id) }}" method="post">
        {{-- @csrf()
    <input type="text" name="name" placeholder="Nome:" value="{{old('name')}}">
    <input type="email" name="email" placeholder="E-mail" value="{{old('email')}}">
    <input type="password" name="password" placeholder="senha" value="{{old('password')}}">
    <button type="submit">
        Enviar
    </button> --}}
        @include('users.comments._partials.form')
    </form>
@endsection
