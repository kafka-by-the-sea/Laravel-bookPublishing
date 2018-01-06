<?php

namespace App\Repositories;

use App\Product;

class NovelRepository
{
    public function getNovelList()
    {
        return Product::where('series_type_id', '2')
                ->orderBy('title_start', 'desc')
                ->paginate(50);
    }

    public function novelSearch($keyword)
    {
        return Product::where('series_id', $keyword)
                ->where('series_type_id', '2')
                ->orderBy('title_start', 'desc')
                ->paginate(50)
                ->setPath('');
    }

    public function getNovelDraftList()
    {
        return Product::where('series_type_id', '2')
            ->where('draft', '0')
            ->orderBy('title_start', 'desc')
            ->paginate(50);
    }

}