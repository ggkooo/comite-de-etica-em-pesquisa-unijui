<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutoriaisController extends Controller
{
    public function index()
    {
        return view('tutoriais');
    }
}