<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\CityRepository as City;

class DistrictsController extends Controller
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
    }

    public function show($city_id)
    {
        $districts = $this->city->districts($city_id);

        return $districts;
    }
}
