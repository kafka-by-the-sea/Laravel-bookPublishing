<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titles extends Model
{
    protected $table = 'titles';

    protected $fillable = [
        'series_id', 'vol_no', 'name', 'detail', 
        'na1', 'prd_type', 'sample', 'start', 'end', 
        'status_id', 'price_48h', 'price_1y', 'price_buy',
        'upgrade', 'ref_id', 'trial', 'page'
    ];
}