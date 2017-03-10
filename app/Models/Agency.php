<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'agencies';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_id',
        'type',
        'code',
        'name',
        'email',
        'phone',
        'mobile',
        'address',
        'avatar',
        'file_id',
        'days',
        'subjects',
        'sex',
        'level',
        'number',
        'time',
        'salary',
        'note',
        'status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
