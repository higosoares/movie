<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use App\Models\UserProfile;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'tb_user';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,
        'email' ,
        'password',
        'situation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->belongsTo('App\Models\UserProfile');
    }
}
