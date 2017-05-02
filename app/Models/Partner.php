<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\City;

class Partner extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partners';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'city_id',
        'type',
        'title',
        'slug',
        'code',
        'grades',
        'days',
        'subjects',
        'level',
        'number',
        'time',
        'salary',
        'partner_note',
        'districts',
        'status',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the city for the partners.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get the user for the partners.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
