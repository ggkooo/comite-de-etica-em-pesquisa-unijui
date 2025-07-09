<nav class="navbar navbar-expand-xl bg-body-tertiary">
    <div class="container-fluid mx-5">
        <a class="navbar-brand bg-light" href="{{ route('inicio') }}"><img src="{{ asset('assets/images/logo-cep.png') }}" alt="Logo unijui"></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" aria-current="page" href="{{ route('inicio') }}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('membros') ? 'active' : '' }}" href="{{ route('membros') }}">Membros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('normativas') ? 'active' : '' }}" href="{{ route('normativas') }}">Normativas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('calendario') ? 'active' : '' }}" href="{{ route('calendario') }}">Reuniões</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tutoriais') ? 'active' : '' }}" href="{{ route('tutoriais') }}">Submissão de Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('modelos-documentos') ? 'active' : '' }}" href="{{ route('modelos-documentos') }}">Documentos</a>
                </li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Submissão de Projetos
                    </a>
                    <ul class="dropdown-menu bg-light">
                        <li><a class="dropdown-item" href="{{ route('tutoriais') }}">Cadastro na Plataforma Brasil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('tutoriais') }}">Vídeos tutoriais</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="https://plataformabrasil.saude.gov.br/login.jsf" target="_blank">Plataforma Brasil</a></li>
                    </ul>
                </li> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Documentos
                    </a>
                    <ul class="dropdown-menu bg-light">
                        <li><a class="dropdown-item" href="{{ route('modelos-documentos') }}">Checklist</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('modelos-documentos') }}">Modelos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('modelos-documentos') }}" target="_blank">Orientações</a></li>
                    </ul>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Capacitações
                    </a>
                    <ul class="dropdown-menu bg-light">
                        <li><a class="dropdown-item" href="{{ route('educa-ceps') }}">Educa CEPs</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('modelos-documentos') }}">Modelos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">Dúvidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contato') ? 'active' : '' }}" href="{{ route('contato') }}">Contato</a>
                </li>
            </ul>
            <span class="navbar-text">
          </span>
        </div>
    </div>
</nav>