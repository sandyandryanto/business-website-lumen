<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{

    protected $table = "pricings";

    protected $fillable = [
        'name',
        'unit',
        'price',
        'description',
        'is_recomended',
        'is_published',
        'sort'
    ];


}
