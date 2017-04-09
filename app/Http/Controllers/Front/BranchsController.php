<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Front\FrontBaseController;
use App\Repositories\Contracts\PartnerRepository as Partner;
use App\Repositories\Contracts\CityRepository as City;

class BranchsController extends FrontBaseController
{
    /**
     * @var PartnerRepository
     */
    private $partner;

    /**
     * @var CityRepository
     */
    private $city;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Partner $partner, City $city) {
        $this->partner = $partner;
        $this->city = $city;

        parent::__construct();
    }

    public function index($params)
    {
        $city = $this->city->getIdBySlug($params);
        $partners = $this->partner->branchs($city->id);

        return view('front.branchs.index', [
            'lists' => $partners,
            'city' => $city
        ]);
    }
}
