<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Post;

class PostController extends Controller
{
    /**
     * 投稿一覧表示
     * 
     * @return view
     */
    public function showList() {
        $posts = Post::all();
        return view('post.list', ['posts' => $posts]);
    }

    /**
     * 登録画面表示
     * 
     * @return view
     */
    public function showCreate() {
        return view('post.form');
    }
}
