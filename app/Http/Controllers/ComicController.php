<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\ProductRepository;
use App\Repositories\ComicRepository;


class ComicController extends Controller
{
    protected $productRepository;
    protected $comicRepository;
    
    public function __construct (
        ProductRepository $productRepository, ComicRepository $comicRepository
    ) {
        $this->productRepository = $productRepository;
        $this->comicRepository = $comicRepository;
    }

    //取得書籍列表
    public function getComicIndex()
    {
        $data = $this->comicRepository->getComicList();
        return view('comic.index', compact('data'));
    }

    public function comicEdit($id)
    {
        $data = $this->productRepository->edit($id);
        return view('comic.edit', compact('data'));
    }

    public function comicUpdate(Request $request, $id)
    { 
        $series_id = $request->input('series_id');
        $series_name = $request->input('series_name');
        $series_author = $request->input('series_author');
        $series_vol = $request->input('series_vol');
        $this->productRepository->updateSeries($series_id, $series_name, $series_author, $series_vol);

        $title_id = $request->input('title_id');
        $title_name = $request->input('title_name');
        $title_vol_no = $request->input('title_vol_no');
        $title_start = $request->input('title_start');
        $title_end = $request->input('title_end');
        $title_price_48h = $request->input('title_price_48h');
        $title_price_buy = $request->input('title_price_buy');
        $this->productRepository->updateTitle($id, $title_id, $title_name, $title_vol_no, $title_start, $title_end, $title_price_48h, $title_price_buy);

        return redirect()->route('comic.index');
    }

    public function getComicSearch(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword != "") {
            $data = $this->comicRepository->comicSearch($keyword);
            $pagination = $data->appends(array('data' => $request->input('keyword')));
        } else {
            $data = $this->comicRepository->getComicList($keyword);
        }

        return view('comic.index', compact('data'));
    }

    public function getComicDraft()
    {
        $data = $this->comicRepository->getComicDraftList();
        return view('comic.check', compact('data'));
    }
}
