<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use function to_route;

class HomeController extends Controller
{
    public function index(): RedirectResponse
    {
        return to_route('home.index');
    }
}
