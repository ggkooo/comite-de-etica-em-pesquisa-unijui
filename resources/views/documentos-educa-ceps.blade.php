@extends('layouts.app')

@section('title', 'Documentos Educa CEPs - Comitê de Ética em Pesquisa - UNIJUÍ')

@section('content')
<div class="container text-justify lh-lg my-5">
    <h2 class="font-primary">Documentos e Manuais - Educa CEPs</h2>
    
    <div class="container mt-4">
        <p>Nesta página, você encontrará todos os módulos do programa Educa CEPs, desenvolvido pela CONEP para capacitação de membros dos Comitês de Ética em Pesquisa. Os documentos abordam desde o histórico do sistema CEP/CONEP até questões específicas como pesquisas em ambientes virtuais, biobancos e análise de casos práticos.</p>
        
        <div class="alert alert-info mt-4 mb-5" role="alert">
            <i class="bi bi-info-circle me-2"></i> Clique nos títulos dos módulos para fazer o download dos documentos em formato PDF.
        </div>
    </div>

    <div class="container mt-4">
        <div class="list-group">
            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-01-historico-do-sistema-cep-conep.pdf" target="_blank" class="text-decoration-none">Módulo 01: Histórico do Sistema CEP/CONEP</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Apresentação da história e evolução do Sistema CEP/CONEP no Brasil, incluindo os marcos regulatórios e o desenvolvimento das diretrizes éticas em pesquisa com seres humanos.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-02-procedimentos-administrativos-dos-ceps.pdf" target="_blank" class="text-decoration-none">Módulo 02: Procedimentos Administrativos dos CEPs</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Orientações sobre os procedimentos administrativos dos CEPs, incluindo composição, funcionamento, atribuições e responsabilidades dos membros e da secretaria.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-03-marcos-regulatorios-do-sistema-cep-conep-para-o-processo-de-analise-etica-de-projetos-de-pesquisas.pdf" target="_blank" class="text-decoration-none">Módulo 03: Marcos Regulatórios do Sistema CEP/CONEP</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Detalhamento dos principais marcos regulatórios que orientam o processo de análise ética de projetos de pesquisa, incluindo resoluções, normas operacionais e diretrizes nacionais e internacionais.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-04-procedimentos-operacionais-da-plataforma-brasil.pdf" target="_blank" class="text-decoration-none">Módulo 04: Procedimentos Operacionais da Plataforma Brasil</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Guia prático sobre os procedimentos operacionais da Plataforma Brasil, sistema oficial para submissão e análise de projetos de pesquisa envolvendo seres humanos.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-05-submissao-e-apreciacao-de-protocolos-de-pesquisa.pdf" target="_blank" class="text-decoration-none">Módulo 05: Submissão e Apreciação de Protocolos de Pesquisa</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Orientações detalhadas sobre o processo de submissão e apreciação de protocolos de pesquisa, incluindo fluxos de análise e critérios de avaliação.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-06-documento-obrigatorios-em-protocolos-de-pesquisa.pdf" target="_blank" class="text-decoration-none">Módulo 06: Documentos Obrigatórios em Protocolos de Pesquisa</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Descrição dos documentos obrigatórios que devem compor os protocolos de pesquisa, incluindo projeto detalhado, TCLE, cronograma, orçamento e outros documentos específicos.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-07-consentimento-livre-e-esclarecido.pdf" target="_blank" class="text-decoration-none">Módulo 07: Consentimento Livre e Esclarecido</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Aprofundamento sobre o processo de consentimento livre e esclarecido, incluindo orientações para elaboração do TCLE, TALE e situações especiais de obtenção de consentimento.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-08-controle-sosial-no-sistema-cep-conep-representantes-de-participantes-de-pesquisa.pdf" target="_blank" class="text-decoration-none">Módulo 08: Controle Social no Sistema CEP/CONEP</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Abordagem sobre o papel dos representantes de participantes de pesquisa e o controle social no Sistema CEP/CONEP, destacando a importância da participação da sociedade.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-09-principios-metodologicos-basicos-e-questoes-eticas.pdf" target="_blank" class="text-decoration-none">Módulo 09: Princípios Metodológicos Básicos e Questões Éticas</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Discussão sobre princípios metodológicos básicos e questões éticas na pesquisa com seres humanos, incluindo avaliação de riscos e benefícios.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-10-pesquisa-clinica-e-utilizacao-de-drogas-experimentais-na-assistencia.pdf" target="_blank" class="text-decoration-none">Módulo 10: Pesquisa Clínica e Utilização de Drogas Experimentais</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Aspectos éticos específicos da pesquisa clínica e da utilização de drogas experimentais na assistência, incluindo ensaios clínicos e uso compassivo de medicamentos.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-11-pesquisas-que-utilizam-metodologias-proprias-das-ciencias-humanas-e-sociais.pdf" target="_blank" class="text-decoration-none">Módulo 11: Pesquisas em Ciências Humanas e Sociais</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Orientações específicas para pesquisas que utilizam metodologias próprias das ciências humanas e sociais, considerando suas particularidades e desafios éticos.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-12-biobancos-e-biorrepositorios.pdf" target="_blank" class="text-decoration-none">Módulo 12: Biobancos e Biorrepositórios</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Diretrizes éticas para pesquisas envolvendo biobancos e biorrepositórios, incluindo armazenamento, uso e compartilhamento de material biológico humano.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-13-elaboracao-de-parecer-casos-praticos-de-analise-estica.pdf" target="_blank" class="text-decoration-none">Módulo 13: Elaboração de Parecer - Casos Práticos</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Orientações práticas para a elaboração de pareceres consubstanciados, incluindo casos práticos de análise ética e modelos de pareceres.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-14-questoes-eticas-relacionadas-ao-desenvolvimento-de-pesquisas-com-seres-humanos-durante-situacoes-de-emergencia-sanitaria-e-desastre-humanitario.pdf" target="_blank" class="text-decoration-none">Módulo 14: Pesquisas em Situações de Emergência Sanitária</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Questões éticas específicas relacionadas ao desenvolvimento de pesquisas com seres humanos durante situações de emergência sanitária e desastre humanitário.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-15-questoes-eticas-relacionadas-ao-desenvolvimento-de-pesquisas-com-seres-humanos-em-ambiente-virtual-incluindo-seu-processo-e-registro-de-consentimento.pdf" target="_blank" class="text-decoration-none">Módulo 15: Pesquisas em Ambiente Virtual</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Questões éticas relacionadas ao desenvolvimento de pesquisas com seres humanos em ambiente virtual, incluindo processo e registro de consentimento eletrônico.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-16-tipificacao-e-tramitacao-da-pesquisa.pdf" target="_blank" class="text-decoration-none">Módulo 16: Tipificação e Tramitação da Pesquisa</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Orientações sobre a tipificação e tramitação da pesquisa no Sistema CEP/CONEP, incluindo áreas temáticas especiais e fluxos específicos.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-17-pesquisas-realizadas-na-estrutura-do-sistema-unico-de-saude-sus.pdf" target="_blank" class="text-decoration-none">Módulo 17: Pesquisas Realizadas no SUS</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Diretrizes específicas para pesquisas realizadas na estrutura do Sistema Único de Saúde (SUS), incluindo aspectos éticos e operacionais.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-18-uso-de-dados-em-pesquisas-cientificas-acesso-compartilhamento-e-protecao.pdf" target="_blank" class="text-decoration-none">Módulo 18: Uso de Dados em Pesquisas Científicas</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Orientações sobre acesso, compartilhamento e proteção de dados em pesquisas científicas, incluindo diretrizes sobre LGPD e ética no uso de dados.</p>
            </div>

            <div class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-2"><a href="/docs/educa-ceps/modulo-19-pesquisas-envolvendo-populacoes-indigenas-no-brasil.pdf" target="_blank" class="text-decoration-none">Módulo 19: Pesquisas Envolvendo Populações Indígenas</a></h5>
                    <span class="badge bg-primary rounded-pill  d-flex align-items-center">PDF</span>
                </div>
                <p class="mb-1">Aspectos éticos específicos para pesquisas envolvendo populações indígenas no Brasil, incluindo diretrizes para respeito à cultura, organização social e autodeterminação desses povos.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-4">
        <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Material produzido pela CONEP</h4>
            <p>Os materiais disponibilizados nesta página foram desenvolvidos pela Comissão Nacional de Ética em Pesquisa (CONEP) como parte do Programa Educa CEPs.</p>
            <hr>
            <p class="mb-0">Para mais informações, acesse o site da <a href="https://conselho.saude.gov.br/comissoes-cns/conep/" class="alert-link" target="_blank">CONEP</a>.</p>
        </div>
    </div>
</div>
@endsection