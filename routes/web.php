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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/archives', function() {
    return view('archives.index');
});

Route::get('/archives/{category}', function($category) {
    return view('archives.category', ['category' => $category]);
});

Route::get('/join', function() {
    return redirect()->to('/');
});


//{}で囲われている部分が変数としてControllerにぶっ飛ぶ
//MathCoutrollerのsumというファンクションを実行せよということ。
Route::get('/sum/{x}/{y}/', 'MathController@sum');

Route::get('/entries/', 'EntriesController@index');


Route::get('{id}', function($id) {
        return $id . 'のページ';
});