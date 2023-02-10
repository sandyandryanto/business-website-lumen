<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $table = "portfolios";

    protected $fillable = [
        'images',
        'title',
        'description',
        'sort',
        'is_published'
    ];


}
