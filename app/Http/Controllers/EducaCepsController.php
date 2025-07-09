<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducaCepsController extends Controller
{
    public function index()
    {
        return view('educa-ceps');
    }
}