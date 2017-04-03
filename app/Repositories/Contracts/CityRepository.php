<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\BaseRepository;

interface CityRepository extends BaseRepository
{
    public function cities();

    public function districts($city_id);

    public function city($id);
}
