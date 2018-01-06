<?php

namespace App\Repositories;

use App\Product;

class ProductRepository
{
    public function edit($id)
    {
        return Product::find($id);
    }

    public function updateSeries($series_id, $series_name, $series_author, $series_vol)
    {
        Product::where('series_id', $series_id)
                ->update(['series_name' => $series_name, 'series_author' => $series_author, 'series_vol' => $series_vol]);
    }

    public function updateTitle($id, $title_id, $title_name, $title_vol_no, $title_start, $title_end, $title_price_48h, $title_price_buy)
    {
        Product::where('id', $id)
            ->update(['title_id' => $title_id, 'title_name' => $title_name, 'title_vol_no' => $title_vol_no, 'title_start' => $title_start, 
                        'title_end' => $title_end, 'title_price_48h' => $title_price_48h, 'title_price_buy' => $title_price_buy]);
    }
}