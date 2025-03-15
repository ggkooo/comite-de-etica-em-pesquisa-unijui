<?php

namespace giordanoberwig\ComiteDeEticaEmPesquisaUnijui\Controllers;

class HomePageController
{
    public function __construct()
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'home.php';
    }
}