<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conatct extends Model
{

    protected $table = "contacts";

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'message'
    ];


}
