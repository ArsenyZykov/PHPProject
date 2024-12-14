<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Post $post){
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',

        ]);
        $post -> update($data);
        return redirect()->route('posts.show', $post->id);
    }
}
