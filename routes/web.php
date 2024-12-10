<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return redirect(route('posts.index'));
    // $post = new Post();
    // $post->title="test_title";
    // $post->content="test_content";
    // $post->save();

    Post::create([
        'title'=>'test title2',
        'content'=>'test content2',
    ]);
    
    return 'Saved, OK!';
});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');