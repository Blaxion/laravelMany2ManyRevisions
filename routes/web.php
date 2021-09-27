<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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
    $articles = Article::all();
    $tags = Tag::all();
    return view('welcome',compact('articles','tags'));
});

Route::post('/search', function (Request $request) {

    $q = $request->q;
    $articles = Article::where('name','LIKE','%'.$q.'%')->get();
    $tags = Tag::where('name','LIKE','%'.$q.'%')->get();
    // dd($q);
    return view('welcome',compact('articles','tags'));
});

Route::resource('tag', TagController::class);
Route::resource('article', ArticleController::class);
