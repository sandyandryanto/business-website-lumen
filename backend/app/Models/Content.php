<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    protected $table = "contents";

    protected $fillable = [
        'key_name',
        'key_value',
    ];


}
