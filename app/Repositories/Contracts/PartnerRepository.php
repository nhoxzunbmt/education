<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\BaseRepository;

interface PartnerRepository extends BaseRepository
{
    public function partners($role_id);

    public function partner($slug);
}
