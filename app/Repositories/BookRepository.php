<?php

namespace App\Repositories;

use App\Product;

class BookRepository
{
    public function getBookList()
    {
        return Product::where('series_type_id', '3')
                ->orderBy('title_start', 'desc')
                ->paginate(50);
    }

    public function bookSearch($keyword)
    {
        return Product::where('series_id', $keyword)
                ->where('series_type_id', '3')
                ->orderBy('title_start', 'desc')
                ->paginate(50)
                ->setPath('');
    }

    public function getBookDraftList()
    {
        return Product::where('series_type_id', '3')
            ->where('draft', '0')
            ->orderBy('title_start', 'desc')
            ->paginate(50);
    }
}