<?php

namespace giordanoberwig\ComiteDeEticaEmPesquisaUnijui\Controllers;

class Page404Controller
{
    public function __construct()
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . '404.php';
    }
}