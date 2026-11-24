<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoloController extends Controller
{
    public function publicView()
    {
        return view('yolo.publicView');
    }
    public function privateView()
    {
        return view('yolo.privateView');
    }
}
