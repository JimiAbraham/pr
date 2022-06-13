<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class advert extends Controller
{
    public function index()
    {
        return view('billboard');
    }
}
