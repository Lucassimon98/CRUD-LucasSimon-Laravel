@extends('layouts.app')

@section('title', 'Login')

<link href="/css/index.css" rel="stylesheet" type="text/css">

@section('content')
<div class="background-inicio d-flex flex-column align-items-center justify-content-center">
    <form action="" class="d-flex flex-column align-items-center bg-light w-50 p-5 rounded">
        <div class="inputBox d-flex w-30 flex-column mb-3">
            <label for="email" class="labelInput font-bold">Email</label>
            <input type="text" name="email" id="email" class="inputUser" required>
        </div>
        <div class="inputBox d-flex w-30 flex-column mb-3">
            <label for="senha" class="labelInput font-bold">Senha</label>
            <input type="text" name="senha" id="senha" class="inputUser" required>
        </div>
        <div class="inputBox d-flex w-25 flex-column">
            <a href="#" class="btn btn-success">Entrar</a>
        </div>
    </form>
</div>

@endsection