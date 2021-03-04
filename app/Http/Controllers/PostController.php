<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * 投稿一覧表示
     * 
     * @return view
     */
    public function showList() {
        return view('post.list');
    }
}
