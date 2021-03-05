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

    /**
     * ToDo登録
     * 
     * @return view
     */
    public function exeRegister(PostRequest $request) {
        // 投稿データの受け取り
        $inputs = $request->all();
        // ToDoを登録
        Post::create($inputs);

        \Session::flash('err_msg', 'ToDoを登録しました。');
        return redirect(route('posts'));
    }

}
