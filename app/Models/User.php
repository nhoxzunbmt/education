<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;
use App\Models\Blog;
use App\Models\Partner;
use Carbon\Carbon;
use Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'is_pwd',
        'name',
        'email',
        'password',
        'mobile',
        'phone',
        'avatar',
        'file_id',
        'note',
        'gender',
        'skin',
        'branch',
        'birthday',
        'address',
        'confirmed',
        'last_login'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Set the user's password.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Get the role for the users.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the blogs for the user.
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    /**
     * Get the partner for the user.
     */
    public function partners()
    {
        return $this->hasMany(Partner::class);
    }

    public function last_login()
    {
        $this->last_login = Carbon::now();

        return $this->save();
    }

    // public function scopeRoleId($query, $role_id)
    // {
    //     return $query->whereRoleId($role_id);
    // }
}
