<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\ProductRepository;
use App\Repositories\NovelRepository;


class NovelController extends Controller
{
    protected $productRepository;
    protected $novelReository;
    
    public function __construct (
        ProductRepository $productRepository, NovelRepository $novelRepository
    ) {
        $this->productRepository = $productRepository;
        $this->novelRepository = $novelRepository;
    }

    //取得書籍列表
    public function getNovelIndex()
    {
        $data = $this->novelRepository->getNovelList();
        return view('novel.index', compact('data'));
    }

    public function novelEdit($id)
    {
        $data = $this->productRepository->edit($id);
        return view('novel.edit', compact('data'));
    }

    public function novelUpdate(Request $request, $id)
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
        
        return redirect()->route('novel.index');
    }

    public function getNovelSearch(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword != "") {
            $data = $this->novelRepository->novelSearch($keyword);
            $pagination = $data->appends(array('data' => $request->input('keyword')));
        } else {
            $data = $this->novelRepository->getNovelList();
        }

        return view('novel.index', compact('data'));
    }

    public function getNovelDraft()
    {
        $data = $this->novelRepository->getNovelDraftList();
        return view('novel.check', compact('data'));
    }
}
