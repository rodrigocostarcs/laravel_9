@extends('layouts.app')
@section('title','criar um novo usuário')
@section('content')
<h1>Cadastrar novo usuário</h1>

<form action="{{route('users.store')}}" method="post">
    @csrf()
    <input type="text" name="name" placeholder="Nome:">
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="senha">
    <button type="submit">
        Enviar
    </button>
</form>
@endsection