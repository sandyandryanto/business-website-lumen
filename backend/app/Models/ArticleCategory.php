<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{

    protected $table = "articles_categories";

    protected $fillable = [
        'article_id',
        'category_name',
        'category_slug'
    ];


}
