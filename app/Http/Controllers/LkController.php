<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LkController extends Controller
{
    public function login()
    {
        return view('lk.index');
    }
}
