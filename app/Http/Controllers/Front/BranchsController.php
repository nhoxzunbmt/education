<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Front\FrontBaseController;
use App\Repositories\Contracts\PartnerRepository as Partner;
use App\Repositories\Contracts\CityRepository as City;
use App\Models\Status;

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
     * @var Status
     */
    private $status;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Partner $partner, City $city, Status $status) {
        $this->partner = $partner;
        $this->city = $city;
        $this->status = $status;

        parent::__construct();
    }

    public function index($params)
    {
        $city = $this->city->getIdBySlug($params);
        $partners = $this->partner->branchs($city->id);

        return view('front.branchs.index', [
            'lists' => $partners,
            'city_name' => $city,
            'city' => $this->city,
            'cities' => $this->city->cities(),
            'status' => $this->status
        ]);
    }
}
