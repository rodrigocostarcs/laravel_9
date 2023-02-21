@extends('layouts.app') <!--Pega de layouts app para usar o template de lá-->

@section('title','listagem de usuários')
    
@section('content') <!--Para essa seção definida no layouts.app vou por este conteúdo.--> 
<h1>Listagem dos Usuários</h1>

<ul>
    @foreach($users as $user)
        <li>
            {{$user->name}} - 
            {{$user->email}}
            | <a href="{{route('users.show',['id'=> $user->id])}}">Detalhes</a>
        </li>
    @endforeach
</ul>
@endsection