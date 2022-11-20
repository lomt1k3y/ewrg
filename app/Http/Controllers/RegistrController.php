<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrController extends Controller
{
    public function form()
    {
        return view('Reg');
}
}
