<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Post;
use App\Http\Requests\PostRequest;
use PhpParser\Node\Expr\FuncCall;

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
     * ToDo登録機能
     * 
     * @return view
     */
    public function exeRegister(PostRequest $request) {
        // 投稿データの受け取り
        $inputs = $request->all();
        // ToDoを登録
        Post::create($inputs);
        
        session()->flash('err_msg', 'ToDoを登録しました。');
        return redirect(route('posts'));
    }

    /**
     * ToDo編集画面表示
     * 
     * @param int $id
     * @return view
     */
    public function showEdit($id) {
        $post = Post::find($id);

        if(is_null($post)) {
            session()->flash('err_msg', 'データがありません。');
            return redirect(route('posts'));
        }

        return view('post.edit', ['post' => $post]);
    }

    /**
     * ToDo編集機能
     * 
     * @return view
     */
    public function exeUpdate(PostRequest $request) {
        // 投稿データの受け取り
        $inputs = $request->all();
        // ToDoを更新
        $post = Post::find($inputs['id']);
        $post->fill([
            'content' => $inputs['content']
        ]);
        $post->save();
        
        session()->flash('err_msg', 'ToDoを更新しました。');
        return redirect(route('posts'));
    }

    /**
     * ToDo削除機能
     * 
     * @param int $id
     * @return view
     */
    public function exeDelete($id) {
        if(empty($id)) {
            session()->flash('err_msg', 'データがありません。');
            return redirect(route('posts'));
        }
        // ToDoを削除
        $post = Post::destroy($id);

        session()->flash('err_msg', 'ToDoを削除しました。');
        return redirect(route('posts'));
    }
}
