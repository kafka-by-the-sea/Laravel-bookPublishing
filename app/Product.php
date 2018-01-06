<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'summary';

    protected $fillable = [
        'series_id', 'series_name', 'series_native_name', 'series_author', 'series_author_native_name', 
        'series_brand_id', 'series_topic', 'series_detail', 'series_category_id', 'series_vol', 
        'series_status_id', 'series_type_id', 'series_is_adult', 'series_direction', 'title_id', 
        'title_vol_no', 'title_name', 'title_detail', 'title_prd_type', 'title_sample', 'title_start', 
        'title_end', 'title_status_id', 'title_price_48h', 'title_price_1y', 'title_upgrade', 
        'title_trial', 'title_page'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}