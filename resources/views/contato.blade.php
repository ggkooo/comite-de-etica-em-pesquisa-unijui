@extends('layouts.app')

@section('title', 'Contato - Comitê de Ética em Pesquisa - UNIJUÍ')

@section('content')
<div class="container text-justify lh-lg my-5">
    <h2 class="font-primary mb-4">Contato</h2>

    @if(session('mensagem'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('mensagem') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title h5 mb-3">Formulário de Contato</h3>
                    <form action="{{ route('contato.enviar') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}" required>
                            @error('nome')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control @error('mensagem') is-invalid @enderror" id="mensagem" name="mensagem" rows="5" required>{{ old('mensagem') }}</textarea>
                            @error('mensagem')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title h5 mb-3">Informações de Contato</h3>
                    
                    <p><strong>Comitê de Ética em Pesquisa da UNIJUÍ</strong></p>
                    
                    <p>
                        <i class="bi bi-geo-alt-fill me-2"></i> 
                        <strong>Endereço:</strong> Rua do Comércio, 3000 - Bairro Universitário<br>
                        <span class="ms-4">Ijuí/RS - CEP 98700-000</span>
                    </p>
                    
                    <p>
                        <i class="bi bi-telephone-fill me-2"></i>
                        <strong>Telefone:</strong> (55) 3332-0200
                    </p>
                    
                    <p>
                        <i class="bi bi-envelope-fill me-2"></i>
                        <strong>E-mail:</strong> <a href="mailto:cep@unijui.edu.br">cep@unijui.edu.br</a>
                    </p>
                    
                    <p>
                        <i class="bi bi-clock-fill me-2"></i>
                        <strong>Horário de atendimento:</strong><br>
                        <span class="ms-4">Segunda a sexta-feira: 8h às 11h30 e 13h30 às 17h</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection