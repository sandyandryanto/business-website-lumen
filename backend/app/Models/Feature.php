<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{

    protected $table = "features";

    protected $fillable = [
        'icon',
        'title',
        'description',
        'is_published',
        'sort'
    ];


}
