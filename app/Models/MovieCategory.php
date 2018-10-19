<?php

namespace App\Models;

use App\Traits\HasCompositePrimaryKey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MovieCategory extends Model
{
    use HasCompositePrimaryKey;

    protected $table = 'ta_movie_category';

    protected $primaryKey = ['id_movie', 'id_category'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_movie',
        'id_category',
    ];

}
