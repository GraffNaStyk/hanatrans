<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('index.index', ["rand" => Str::random(6)]);
    }
}
