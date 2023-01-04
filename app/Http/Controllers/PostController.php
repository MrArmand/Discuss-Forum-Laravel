<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $p = new Post;
        $p->content = $request->description;
        $p->user_id = auth()->user()->id;
        $p->save();

        return redirect('dashboard')->with('message', 'Post added to the dashboard.');
    }
}