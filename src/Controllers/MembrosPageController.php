<?php

namespace giordanoberwig\ComiteDeEticaEmPesquisaUnijui\Controllers;

class MembrosPageController
{
    public function __construct()
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'membros.php';
    }
}