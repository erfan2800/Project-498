<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function postIndex(){
        $posts = Post::join('admins', 'admins.id', '=', 'post.userId')
            ->orderBy('post.created_at', 'desc')
            ->select('admins.name','admins.email','post.id','post.status')
            ->get();
        return view('Admin.posts', compact('posts'));
    }

    public function userPost($id){

        $user = Post::where('id', $id)->first();
        if ($user->status == 1){
            Post::where('id', $id)->update(['status'=>0]);
        }else{
            Post::where('id', $id)->update(['status'=>1]);
        }
        return redirect('posts');
    }
}
