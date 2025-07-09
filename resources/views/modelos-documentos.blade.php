@extends('layouts.app')

@section('title', 'Modelos de Documentos - Comitê de Ética em Pesquisa - UNIJUÍ')

@section('content')
<div class="container text-justify lh-lg my-5">
    <h2 class="font-primary">Modelos de Documentos</h2>
    <div class="container mt-4">
        <p>Esta página disponibiliza modelos de documentos essenciais para a submissão de projetos de pesquisa ao CEP/UNIJUÍ. Estes modelos foram elaborados para auxiliar os pesquisadores na preparação dos documentos necessários, em conformidade com as exigências éticas e normativas do Sistema CEP/CONEP.</p>
        
        <div class="alert alert-info mt-4" role="alert">
            <strong>Importante:</strong> Os modelos são apenas sugestões que podem ser adaptados conforme as especificidades de cada pesquisa, desde que mantenham os elementos essenciais exigidos pela legislação e pelas normas éticas.
        </div>
    </div>
    
    <div class="container mt-5">
        <h3 class="font-primary">Termos de Consentimento e Assentimento</h3>
        
        <div class="table-responsive mt-4">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Documento</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Download</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TCLE - Termo de Consentimento Livre e Esclarecido</td>
                        <td>Modelo para participantes adultos com autonomia plena</td>
                        <td><a href="/docs/modelos/TCLE-ADULTOS.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>TCLE - Representante Legal</td>
                        <td>Modelo para ser assinado pelo responsável legal de participantes sem autonomia</td>
                        <td><a href="/docs/modelos/TCLE-MENORES-DE-IDADE.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>TALE - Termo de Assentimento Livre e Esclarecido</td>
                        <td>Modelo para participantes menores de idade ou legalmente incapazes</td>
                        <td><a href="/docs/modelos/TALE-TERMO-ASSENTIMENTO-LIVRE-ESCLARECIDO.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>TALE Lúdico</td>
                        <td>Modelo visual para crianças (7 a 12 anos)</td>
                        <td><a href="/docs/modelos/RALE-REGISTRO-ASSENTIMENTO-LIVRE-ESCLARECIDO.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>TCLE - Pesquisa Online</td>
                        <td>Modelo adaptado para pesquisas realizadas em ambiente virtual</td>
                        <td><a href="/docs/modelos/RCLE-ADULTOS.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="container mt-5">
        <h3 class="font-primary">Autorizações e Declarações</h3>
        
        <div class="table-responsive mt-4">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Documento</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Download</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Declaração de Instituição e Infraestrutura</td>
                        <td>Documento para comprovação de autorização da instituição onde será realizada a pesquisa</td>
                        <td><a href="/docs/modelos/CONCORDANCIA-INSTITUICAO-COPARTICIPANTE.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>Declaração de Compromisso do Pesquisador</td>
                        <td>Compromisso com o cumprimento dos aspectos éticos e normativas aplicáveis</td>
                        <td><a href="/docs/modelos/TERMO-DE-COMPROMISSO-DO-PESQUISADOR.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>Autorização para Uso de Banco de Dados</td>
                        <td>Documento para solicitação de autorização para uso de dados institucionais</td>
                        <td><a href="/docs/modelos/TCUD-MODELO.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>Termo de Confidencialidade</td>
                        <td>Compromisso de sigilo e confidencialidade das informações coletadas</td>
                        <td><a href="/docs/modelos/TERMO-DE-AUTORIZACAO-DE-USO-DE-IMAGEM-E-DEPOIMENTOS.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="container mt-5">
        <h3 class="font-primary">Orientações para submissão</h3>
        
        <div class="table-responsive mt-4">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Documento</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Download</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Checklist para Submissão</td>
                        <td>Lista de verificação dos documentos necessários para submissão ao CEP</td>
                        <td><a href="/docs/modelos/CARTA-ENCAMINHAMENTO-RELATORIO.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>Modelo de Projeto Detalhado</td>
                        <td>Estrutura sugerida para elaboração do projeto detalhado</td>
                        <td><a href="/docs/modelos/DISPENSA-TCLE-AREA-DA-SAUDE.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>Guia para Elaboração do Relatório Final</td>
                        <td>Orientações para elaboração do relatório final da pesquisa</td>
                        <td><a href="/docs/modelos/RELATORIO-PARCIAL-OU-FINAL.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                    <tr>
                        <td>Carta de Resposta a Pendências</td>
                        <td>Modelo para responder às pendências apontadas pelo CEP</td>
                        <td><a href="/docs/modelos/CARTA-DE-RESPOSTA-PENDENCIAS.docx" class="btn btn-sm btn-outline-primary" download>Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="container mt-5 mb-4">
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Dúvidas sobre os documentos?</h4>
            <p>Se você tiver dúvidas sobre como preencher ou adaptar algum dos modelos acima, entre em contato com o CEP/UNIJUÍ pelo telefone (55) 3332-0301 ou pelo e-mail cep@unijui.edu.br.</p>
            <hr>
            <p class="mb-0">Recomendamos também consultar as <a href="{{ route('faq') }}" class="alert-link">Perguntas Frequentes</a> e as <a href="{{ route('normativas') }}" class="alert-link">Normativas</a> aplicáveis às pesquisas com seres humanos.</p>
        </div>
    </div>
</div>
@endsection