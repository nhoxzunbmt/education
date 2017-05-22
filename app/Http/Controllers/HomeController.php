<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        // code
    }

    public function index()
    {
        return view('front.index', [
            // code
        ]);
    }
}
