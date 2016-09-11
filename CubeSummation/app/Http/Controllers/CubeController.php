<?php

namespace CubeSummation\Http\Controllers;

use Illuminate\Http\Request;

use CubeSummation\Http\Requests;

class CubeController extends Controller
{
    public function home()
    {
        return view('cube.home');
    }

    public function about()
    {
        return view('cube.about');
    }

    public function run()
    {

    }
}
