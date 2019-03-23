<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'ta_user_profile';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'id_profile',
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User', 'id_user');
    }

    public function profiles()
    {
        return $this->hasMany('App\Models\Profile', 'id_profile');
    }
}
