<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\ProductRepository;
use App\Repositories\BookRepository;


class BookController extends Controller
{
    protected $productRepository;
    protected $bookRepository;
    
    public function __construct (
        ProductRepository $productRepository, BookRepository $bookRepository
    ) {
        $this->productRepository = $productRepository;
        $this->bookRepository = $bookRepository;
    }

    //取得書籍列表
    public function getBookIndex()
    {
        $data = $this->bookRepository->getBookList();
        return view('book.index', compact('data'));
    }

    public function bookEdit($id)
    {
        $data = $this->productRepository->edit($id);
        return view('book.edit', compact('data'));
    }

    public function bookUpdate(Request $request, $id)
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
       
        return redirect()->route('book.index');
    }

    public function getBookSearch(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($keyword != "") {
            $data = $this->bookRepository->bookSearch($keyword);
            $pagination = $data->appends(array('data' => $request->input('keyword')));
        } else {
            $data = $this->bookRepository->getBookList();
        }

        return view('book.index', compact('data'));
    }

    public function getBookDraft()
    {
        $data = $this->bookRepository->getBookDraftList();
        return view('book.check', compact('data'));
    }
}
