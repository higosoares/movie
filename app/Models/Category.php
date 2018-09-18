<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tb_category';

    protected $primaryKey = 'id_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tx_name_user' ,
        'tx_email_user' ,
        'tx_password_user',
        'tp_situation_user'
    ];
}
