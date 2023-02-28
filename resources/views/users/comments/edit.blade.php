@extends('layouts.app')

@section('title', "edição do comentario do usuário {$user->name}")

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Editar o comentário | {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('comments.update', ['id' => $comment->id]) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        <!--Para indicar que é do tipo PUT. USA ESTE OU A DIRETIVA ABAIXO-->
        <!--@method('PUT')-->
        @include('users.comments._partials.form')
    </form>

@endsection
