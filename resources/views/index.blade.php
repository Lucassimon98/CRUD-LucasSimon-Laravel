@extends('layouts.app')

@section('title', 'Inicio')

<link href="/css/index.css" rel="stylesheet" type="text/css">


@section('content')
<div class="background-inicio d-flex flex-column justify-content-center">
    <div class="container text-center align-middle">
        <h1>Sistema Lucas Simon</h1>
    </div>
    <div class="row">
        <div class="col-md-6 text-end">
            <a href="./entrar" class="btn btn-primary">Entrar</a>
        </div>
        <div class="col-md-6 text-start">
            <a href="./cadastro" class="btn btn-primary">Cadastre-se</a>
        </div>
    </div>
</div>

@endsection