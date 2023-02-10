<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = "comments";

    protected $fillable = [
        'parent_id',
        'article_id',
        'name',
        'content'
    ];


}
