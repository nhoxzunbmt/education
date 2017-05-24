<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use App\Repositories\Eloquent\EloquentBaseRepository;
use App\Repositories\Contracts\UserRepository;

class EloquentUserRepository extends EloquentBaseRepository implements UserRepository
{
    public function users($role_id = null)
    {
        $query = $this->model
            ->with('role');

        if ($role_id)
        {
            $query->whereRoleId($role_id);
        }

        $datas = $query->orderBy('created_at', 'DESC');

        return $query;
    }

    public function isCheck($mobile, $email)
    {
        return $this->model
            ->where('mobile', $mobile)
            ->orWhere('email', $email)
            ->first();
    }
}
