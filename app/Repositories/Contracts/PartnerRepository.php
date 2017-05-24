<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\BaseRepository;

interface PartnerRepository extends BaseRepository
{
    public function partners($role_id, $request);

    public function partner($slug);

    public function branchs($city_id, $type);
}
