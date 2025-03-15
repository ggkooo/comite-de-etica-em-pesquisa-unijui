<?php
    $uri = $_SERVER['REQUEST_URI'];
?>

<nav class="navbar navbar-expand-xl bg-body-tertiary">
    <div class="container-fluid mx-5">
        <a class="navbar-brand bg-light" href="/"><img src="/images/logo-cep.png" alt="Logo unijui"></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if ($uri == '/') {echo 'active';} ?>" aria-current="page" href="/">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($uri == '/membros') {echo 'active';} ?>" href="/membros">Membros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($uri == '/normativas') {echo 'active';} ?>" href="/normativas">Normativas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($uri == '/reunioes') {echo 'active';} ?>" href="/reunioes">Reuniões</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Submissão de Projetos
                    </a>
                    <ul class="dropdown-menu bg-light">
                        <li><a class="dropdown-item" href="/cadastro-plataforma-brasil">Cadastro na Plataforma Brasil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/videos-tutoriais">Vídeos tutoriais</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="https://plataformabrasil.saude.gov.br/login.jsf" target="_blank">Plataforma Brasil</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Documentos
                    </a>
                    <ul class="dropdown-menu bg-light">
                        <li><a class="dropdown-item" href="#">Checklist</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/documentos-modelos">Modelos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Orientações</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Capacitações
                    </a>
                    <ul class="dropdown-menu bg-light">
                        <li><a class="dropdown-item" href="/educa-ceps">Educa CEPs</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Modelos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Plano de Capacitação CEP UNIJUÍ</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($uri == '/duvidas') {echo 'active';} ?>" href="/duvidas">Dúvidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contato">Contato</a>
                </li>
            </ul>
            <span class="navbar-text">
          </span>
        </div>
    </div>
</nav>