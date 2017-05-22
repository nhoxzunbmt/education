<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\City;

class BaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $branch_city = new City;

        View::share([
            'branch_hn' => $branch_city->slugs(1),
            'branch_hcm' => $branch_city->slugs(2)
        ]);
    }
}
