<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        // code
    }

    public function create()
    {

        return view('front.contact', [
            // code
        ]);
    }

    public function store(StoreUser $request)
    {
        
        return redirect('/');
    }
}
