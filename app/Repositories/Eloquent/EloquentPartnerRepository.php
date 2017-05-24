<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use App\Repositories\Eloquent\EloquentBaseRepository;
use App\Repositories\Contracts\PartnerRepository;

class EloquentPartnerRepository extends EloquentBaseRepository implements PartnerRepository
{
    public function partners($role_id, $request)
    {
        $query = $this->model
            ->with('city', 'user')
            ->whereType($role_id)
            ->whereStatus(false);

        if (isset($request['grades']) && $request['grades'] != '')
        {
            $grades = $request['grades'];
            $query->where('grades', 'LIKE', '%'.$grades.'%');
        }

        if (isset($request['city_id']) && $request['city_id'] != '')
        {
            $query->whereCityId($request['city_id']);
        }

        $datas = $query->paginate();

        return $datas;
    }

    public function partner($slug)
    {
        return $this->model
            ->with('city', 'user')
            ->whereSlug($slug)
            ->firstOrFail();
    }

    public function branchs($city_id, $type)
    {
        $query = $this->model
            ->with('city', 'user')
            ->whereCityId($city_id)
            ->whereType($type)
            ->whereStatus(false);

        $datas = $query->paginate(config('app.page'));

        return $datas;
    }
}
