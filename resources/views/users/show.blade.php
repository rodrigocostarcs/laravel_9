@extends('layouts.app')
@section('title','listagem do usuário')
@section('content')
<h1>Detalhes do usuário {{$user->name}}</h1>

<ul>
<li>
    {{$user->name}}
</li>
<li>
    {{$user->email}}
</li>
</ul>
@endsection