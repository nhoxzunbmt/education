<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Redis;
use App\Repositories\Eloquent\EloquentBaseRepository;
use App\Repositories\Contracts\PartnerRepository;

class EloquentPartnerRepository extends EloquentBaseRepository implements PartnerRepository
{
    public function partners($role_id)
    {
        $query = $this->model
            ->with(['city', 'user' => function ($q) use ($role_id) {
                $q->whereRoleId($role_id);
            }])
        ->whereStatus(false);

        $datas = $query->paginate(config('app.page'));

        return $datas;
    }

    public function partner($slug)
    {
        return $this->model
            ->with('city', 'user')
            ->whereSlug($slug)
            ->firstOrFail();
    }
}