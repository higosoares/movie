<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'tb_profile';

    protected $primaryKey = 'id_profile';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tx_description_movie'
    ];

 /*    public function user()
    {
        return $this->belongsTo('App\UserProfile');
    } */
}
