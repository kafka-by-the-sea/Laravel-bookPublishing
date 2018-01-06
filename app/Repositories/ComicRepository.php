<?php

namespace App\Repositories;

use App\Product;

class ComicRepository
{
    public function getComicList()
    {
        return Product::where('series_type_id', '1')
                ->orderBy('title_start', 'desc')
                ->paginate(50);
    }

    public function comicSearch($keyword)
    {
        return Product::where('series_id', $keyword)
                ->where('series_type_id', '1')
                ->orderBy('title_start', 'desc')
                ->paginate(50)
                ->setPath('');
    }

    public function getComicDraftList()
    {
        return Product::where('series_type_id', '1')
            ->where('draft', '0')
            ->orderBy('title_start', 'desc')
            ->paginate(50);
    }
}