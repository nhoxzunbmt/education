<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Builder;
use App\Repositories\Eloquent\EloquentBaseRepository;
use App\Repositories\Contracts\SubjectRepository;

class EloquentSubjectRepository extends EloquentBaseRepository implements SubjectRepository
{
    public function subjects()
    {
        return $this->model->all();
    }
}
