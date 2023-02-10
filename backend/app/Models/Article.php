<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = "articles";

    protected $fillable = [
        'user_id',
        'image',
        'title',
        'slug',
        'content',
        'is_published',
        'sort'
    ];


}
