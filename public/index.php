<?php

use giordanoberwig\ComiteDeEticaEmPesquisaUnijui\Controllers\{CalendarioPageController,
    FAQPageController,
    InicioPageController,
    MembrosPageController,
    NormativasPageController,
    Page404Controller};

$uri =  $_SERVER['REQUEST_URI'];

require_once __DIR__ . DIRECTORY_SEPARATOR .'..' . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';

if ($uri == '/') {
    new InicioPageController();
} else if ($uri == '/membros') {
    new MembrosPageController();
} else if ($uri == '/normativas') {
    new NormativasPageController();
} else if ($uri == '/reunioes') {
    new CalendarioPageController();
} else if ($uri == '/videos-tutoriais') {
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' .DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'tutoriais.php';
} else if ($uri == '/documentos-modelos') {
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'modelos-documentos.php';
} else if ($uri == '/educa-ceps') {
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'educa-ceps.php';
} else if ($uri == '/duvidas') {
    new FAQPageController();
} else if ($uri == '/contato') {
    exit();
} else if ($uri == '/404') {
    new Page404Controller();
} else {
    header('Location: /404');
}
