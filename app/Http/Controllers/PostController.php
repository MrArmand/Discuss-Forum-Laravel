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
        $validatedData = $request->validate([
            'content' => 'required|max:1000',
            'id' => 'required|numerical',
        ]);

        $p = new Post;
        $p->content = $validatedData['content'];
        $p->user_id = $validatedData['id'];
        $p->save();

        session()->flash('message', 'Post added to the dashboard.');

        return redirect()->route('dashboard');
    }
}