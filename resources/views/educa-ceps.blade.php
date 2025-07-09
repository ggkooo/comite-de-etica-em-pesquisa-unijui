@extends('layouts.app')

@section('title', 'Educa CEPs - Comitê de Ética em Pesquisa - UNIJUÍ')

@section('content')
<div class="container text-justify lh-lg my-5">
    <h2 class="font-primary">Educa CEPs</h2>
    <div class="container mt-4">
        <p>O Programa Educa CEPs, desenvolvido pela CONEP, é uma iniciativa educativa que visa capacitar e orientar os membros dos Comitês de Ética em Pesquisa (CEPs) sobre as normas e procedimentos relacionados à análise ética de projetos de pesquisa envolvendo seres humanos.</p>
        
        <p>Através de vídeos, documentos e materiais educativos, o programa aborda temas fundamentais para a atuação dos CEPs, como:</p>
        
        <ul class="mt-3 mb-4">
            <li>Diretrizes éticas nacionais e internacionais</li>
            <li>Procedimentos operacionais do Sistema CEP/CONEP</li>
            <li>Avaliação de protocolos de pesquisa</li>
            <li>Análise de riscos e benefícios</li>
            <li>Elaboração de pareceres consubstanciados</li>
            <li>Proteção dos participantes de pesquisa</li>
        </ul>
        
        <p>O CEP/UNIJUÍ disponibiliza aqui materiais educativos e orientações para pesquisadores e membros do Comitê, contribuindo para o aprimoramento da análise ética das pesquisas e para a proteção dos direitos e do bem-estar dos participantes.</p>
    </div>
    
    <div class="container mt-5">
        <h3 class="font-primary">Materiais disponíveis:</h3>
        
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Plano de Capacitação CEP/UNIJUÍ</h5>
                        <p class="card-text">Conheça o plano de capacitação do CEP/UNIJUÍ para membros e pesquisadores.</p>
                        <a href="#" class="btn btn-primary w-100">Em breve</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Documentos e Manuais</h5>
                        <p class="card-text">Guias, manuais e documentos orientadores para a análise ética de protocolos de pesquisa.</p>
                        <a href="{{ route('documentos-educa-ceps') }}" class="btn btn-primary w-100">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection