@extends('layouts.app')

@section('title', "edição do usuário {$user->name}")

@section('content')
    <h1>Editar usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        <!--Para indicar que é do tipo PUT. USA ESTE OU A DIRETIVA ABAIXO-->
        <!--@method('PUT')-->
        @include('users._partials.form')
    </form>

@endsection
