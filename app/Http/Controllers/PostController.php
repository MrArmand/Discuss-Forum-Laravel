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
            'content' => 'required|max:10000'
        ]);
        $p = new Post;
        $p->content = $validatedData['content'];
        $p->user_id = auth()->user()->id;
        $p->save();

        return redirect('dashboard')->with('message', 'Post added to the dashboard.');
    }

    public function update(Post $post, Request $request)
    {
        

    }

    public function destroy($id)
    {
        dd($id);
        $post = Post::findOrFail($id);
        
        $post->delete();
        return back()->with('message', 'Post has been deleted.');
    }

}