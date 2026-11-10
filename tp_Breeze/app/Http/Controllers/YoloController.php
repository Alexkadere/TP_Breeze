<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoloController extends Controller
{
    public function publicView()
    {
        return view('welcome');
    }
    public function privateView()
    {
        return view('dashboard');
    }
}
