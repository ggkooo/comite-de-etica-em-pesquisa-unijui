@extends('layouts.app')

@section('title', 'Página não encontrada - UNIJUÍ')

@section('content')
<div class="container text-center my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3">Página não encontrada</p>
            <p class="lead">A página que você está procurando não existe ou foi movida.</p>
            <a href="{{ route('inicio') }}" class="btn btn-primary">Voltar para a página inicial</a>
        </div>
    </div>
</div>
@endsection