<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use App\Repositories\Eloquent\EloquentBaseRepository;
use App\Repositories\Contracts\DayRepository;

class EloquentDayRepository extends EloquentBaseRepository implements DayRepository
{
    public function days()
    {
        return $this->model->all();
    }
}
