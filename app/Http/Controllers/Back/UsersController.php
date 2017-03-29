<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Back\StoreUser;
use App\Http\Requests\Back\UpdateUser;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('back.users.index', [
            // code
        ]);
    }

    public function create()
    {

        return view('back.users.create', [
            // code
        ]);
    }

    public function store(StoreUser $request)
    {
        
        return redirect('/');
    }

    public function edit()
    {
        
        return view('back.users.edit', [
            // code
        ]);
    }

    public function update(UpdateUser $request)
    {
        
        return redirect('/')
            ->with('success', '');
    }

    public function view($id)
    {
        
        return view('back.users.view', [
            // code
        ]);
    }

    public function destroy($id)
    {
        
        return redirect('/');
    }
}
