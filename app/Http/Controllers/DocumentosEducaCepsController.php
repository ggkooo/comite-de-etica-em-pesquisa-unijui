<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosEducaCepsController extends Controller
{
    public function index()
    {
        return view('documentos-educa-ceps');
    }
}