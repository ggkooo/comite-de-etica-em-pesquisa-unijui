<?php

use giordanoberwig\ComiteDeEticaEmPesquisaUnijui\Controllers\{CalendarPageController,
    HomePageController,
    MembersPageController,
    NormativePageController,
    Page404Controller};

$uri =  $_SERVER['REQUEST_URI'];

require_once __DIR__ . DIRECTORY_SEPARATOR .'..' . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';

if ($uri == '/') {
    new HomePageController();
} else if ($uri == '/membros') {
    new MembersPageController();
} else if ($uri == '/normativas') {
    new NormativePageController();
} else if ($uri == '/calendario') {
    new CalendarPageController();
} else if ($uri == '/documentos') {
    exit();
} else if ($uri == '/duvidas') {
    exit();
} else if ($uri == '/contato') {
    exit();
} else if ($uri == '/404') {
    new Page404Controller();
} else {
    header('Location: /404');
}
