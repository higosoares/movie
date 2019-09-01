<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;

    protected $table = 'tb_category';

    protected $primaryKey = 'id_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tx_name_category'
    ];


    public function movies()
    {
        return $this->belongsToMany('App\Models\Movie', 'ta_movie_category', 'id_category' , 'id_movie');
    }

}
