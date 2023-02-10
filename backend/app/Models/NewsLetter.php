<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{

    protected $table = "newsletter";

    protected $fillable = [
        'ip_address',
        'email'
    ];


}
