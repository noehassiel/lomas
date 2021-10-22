<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function conoce()
    {
        return view('front.conoce');
    }

    public function equipo()
    {
        return view('front.equipo');
    }

    public function contacto()
    {
        return view('front.contacto');
    }
}
