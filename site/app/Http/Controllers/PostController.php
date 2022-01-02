<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Variable;

class PostController extends Controller
{
    function post(){
        return view('Layout.post');
    }
   public function insertPost(Request $request)
    {
        $message = '';
        $name = '';
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/photos');
            $image->move($destinationPath, $name);
        }

        $post = new Post();
        $post->userId = $request->userId;
        $post->text = $request->text;
        $post->photo = $name;
        $post->save();
        if (!$post){
            $message = "hoy ni ";
        }
        $data = Post::join('admins', 'admins.id', '=', 'post.userId')
            ->get();
        return redirect('/');
    }
}
