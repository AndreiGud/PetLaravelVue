<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\View\View;

class CustomDEV extends Controller
{
    public function show()
    {
        return view('welcome');
    }
}
