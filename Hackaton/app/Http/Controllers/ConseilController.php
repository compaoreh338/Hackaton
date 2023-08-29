<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConseilController extends Controller
{
    public function index()
    {
        return view('conseil');
    }
}
