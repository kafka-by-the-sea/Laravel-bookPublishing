<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//列表
Route::get('/', 'ComicController@getComicIndex')->name('comic.index');
Route::get('/novel', 'NovelController@getNovelIndex')->name('novel.index');
Route::get('/book', 'BookController@getBookIndex')->name('book.index');

//新增書籍
Route::get('/product/create', 'FileController@create')->name('product.create');
//儲存
Route::post('/product/store', 'FileController@store')->name('product.store');
//轉檔
Route::get('/product/file', 'FileController@file')->name('product.file');

//顯示編輯頁面
Route::get('/comic-edit/{id}', 'ComicController@comicEdit')->name('comic.edit');
Route::get('/novel-edit/{id}', 'NovelController@novelEdit')->name('novel.edit');
Route::get('/book-edit/{id}', 'BookController@bookEdit')->name('book.edit');

//更新
Route::put('/comic-update/{id}', 'ComicController@comicUpdate')->name('comic.update');
Route::put('/novel-update/{id}', 'NovelController@novelUpdate')->name('novel.update');
Route::put('/book-update/{id}', 'BookController@bookUpdate')->name('book.update');

//搜尋
Route::post('/comic/search', 'ComicController@getComicSearch')->name('comic.search');
Route::post('/novel/search', 'NovelController@getNovelSearch')->name('novel.search');
Route::post('/book/search', 'BookController@getBookSearch')->name('book.search');

//草稿列表
Route::get('/comic/draft', 'ComicController@getComicDraft')->name('comic.draft');
Route::get('/novel/draft', 'NovelController@getNovelDraft')->name('novel.draft');
Route::get('/book/draft', 'BookController@getBookDraft')->name('book.draft');

//Tags管理
Route::get('/tags/index', 'TagController@getTagsIndex')->name('tags.index');
Route::post('/tags/store', 'TagController@store')->name('tags.store');

//翻譯管理
Route::get('/outsourcing/index', 'OutsourcingController@getIndex')->name('outsourcing.index');