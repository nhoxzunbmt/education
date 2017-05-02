<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Front\FrontBaseController;
use App\Repositories\Contracts\CityRepository as City;
use Auth;

class ProfileController extends FrontBaseController
{
    /**
     * @var CityRepository
     */
    private $city;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(City $city)
    {
        $this->city = $city;
        parent::__construct();

        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth()->user();

        return view('front.profile.show', [
            'user' => $user,
            'city' => $this->city
        ]);
    }
}
