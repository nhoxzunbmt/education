<?php

namespace App\Repositories\Contracts;

use App\Repositories\Contracts\BaseRepository;

interface UserRepository extends BaseRepository
{
    public function users($role_id);
}
