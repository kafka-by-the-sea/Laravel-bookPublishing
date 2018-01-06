<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';

    protected $fillable = [
        'name', 'native_name', 'author', 'author_native_name', 
        'brand_id', 'topic', 'detail', 'category_id', 'vol', 
        'status_id', 'type_id', 'is_adult', 'direction'
    ];
}