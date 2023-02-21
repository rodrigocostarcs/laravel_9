@extends('layouts.app') <!--Pega de layouts app para usar o template de lá-->

@section('title','listagem de usuários')
    
@section('content') <!--Para essa seção definida no layouts.app vou por este conteúdo.--> 
<h3>
    Listagem dos Usuários | <a href="{{route('users.create')}}">+</a>
</h3>

<ul>
    @foreach($users as $user)
        <li>
            {{$user->name}} - 
            {{$user->email}}
            | <a href="{{route('users.show',['id'=> $user->id])}}">Detalhes</a>
            | <a href="{{route('users.edit',['id'=> $user->id])}}">Editar</a>
        </li>
    @endforeach
</ul>
@endsection