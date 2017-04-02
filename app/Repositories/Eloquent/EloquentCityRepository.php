<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use App\Repositories\Eloquent\EloquentBaseRepository;
use App\Repositories\Contracts\CityRepository;

class EloquentCityRepository extends EloquentBaseRepository implements CityRepository
{
    public function cities()
    {
        return $this->model
            ->whereParentId(0)
            ->pluck('name', 'id');
    }

    public function districts($city_id)
    {
        return $this->model
            ->whereParentId($city_id)
            ->pluck('name', 'id');
    }

    public function city($id)
    {
        $city = $this->model->find($id);

        return $city->name;
    }
}
