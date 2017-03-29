<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Back\StoreRole;
use App\Http\Requests\Back\UpdateRole;

class PartnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('back.partners.index', [
            // code
        ]);
    }

    public function view($id)
    {
        
        return view('back.partners.view', [
            // code
        ]);
    }

    public function destroy($id)
    {
        
        return redirect('/');
    }
}
