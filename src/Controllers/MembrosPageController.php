<?php

namespace giordanoberwig\ComiteDeEticaEmPesquisaUnijui\Controllers;

class MembersPageController
{
    public function __construct()
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'members.php';
    }
}