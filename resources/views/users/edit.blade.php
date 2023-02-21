@extends('layouts.app')

@section('title',"edição do usuário {$user->name}")
    
@section('content')
    <h1>Editar usuário</h1>

    @if($errors->any())
        <ul class="errors">
            @foreach($errors->all() as $error)
                <li class="error">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('users.update',['id'=>$user->id])}}" method="post">
        <input type="hidden" name="_method" value="PUT"> <!--Para indicar que é do tipo PUT. USA ESTE OU A DIRETIVA ABAIXO-->
        <!--@method('PUT')-->
        @csrf()
        <input type="text" name="name" placeholder="Nome:" value="{{$user->name}}">
        <input type="email" name="email" placeholder="E-mail" value="{{$user->email}}">
        <input type="password" name="password" placeholder="senha">
        <button type="submit">
            Enviar
        </button>
    </form>

@endsection