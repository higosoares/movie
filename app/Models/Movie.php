<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    protected $table = 'tb_movie';

    protected $primaryKey = 'id_movie';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tx_name_movie',
        'tx_name_director',
        'tx_description_movie',
        'qt_duration_movie',
        'qt_debut_movie',
        'qt_year_movie',
        'tp_situation_movie',
        'tx_url_imagem_movie',
        'tx_url_trailer_movie',
        'qt_star_rating_movie',
    ];


    public function roles()
    {
        return $this->belongsToMany(Category::class, 'ta_movie_category', 'id_movie', 'id_category');
    }
}
