<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelosDocumentosController extends Controller
{
    public function index()
    {
        return view('modelos-documentos');
    }
}