<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Front\FrontBaseController;

class HomeController extends FrontBaseController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index', [

        ]);
    }

    public function contact()
    {
        return view('front.contact', [

        ]);
    }
}
