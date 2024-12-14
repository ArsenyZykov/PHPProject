<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(){
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $data += ['user_id' => Auth::id()];
        Post::create($data);
        return redirect()->route('posts.index');
    }
}
