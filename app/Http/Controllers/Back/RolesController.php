<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RoleRepository as Role;
use App\Http\Requests\Back\StoreRole;
use App\Http\Requests\Back\UpdateRole;

class RolesController extends Controller
{
    /**
     * @var RoleRepository
     */
    private $role;

    public function __construct(Role $role)
    {
        $this->role = $role;

        $this->middleware('auth');
    }

    public function index()
    {
        $roles = $this->role->all();

        return view('back.roles.index', [
            'roles' => $roles
        ]);
    }

    public function create()
    {

        return view('back.roles.create', [
            // code
        ]);
    }

    public function store(StoreRole $request)
    {
        
        return redirect('/');
    }

    public function edit()
    {
        
        return view('back.roles.edit', [
            // code
        ]);
    }

    public function update(UpdateRole $request)
    {
        
        return redirect('/')
            ->with('success', '');
    }

    public function view($id)
    {
        
        return view('back.roles.view', [
            // code
        ]);
    }

    public function destroy($id)
    {
        
        return redirect('/');
    }
}
