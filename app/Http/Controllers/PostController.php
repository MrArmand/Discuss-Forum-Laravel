<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Pin;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
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

    public function update($id){


        request()->validate([
            'content' => 'required'
        ]);
    

        Post::find($id)->update([
           'content' => request('content')
        ]);

        return redirect('dashboard')->with('message', 'Post has been edited.');
    }

    public function destroy(Request $request)
    {
        $post = Post::findOrFail($request -> post_id)->delete();
        
        return redirect('dashboard')->with('message', 'Post has been deleted.');
    }

    public function pin($id){

        $user = auth()->user()->id;
        $post = Post::findOrFail($id);

        $pin = new Pin;
        $pin->post_id = $post->id;
        $pin->user_id = auth()->user()->id;
        $pin->save();

        return redirect('dashboard')->with('message', 'Post has been pinned.');
    }

    public function pinDestroy(Request $request)
    {
        $pin = Pin::findOrFail($request -> id)->delete();
        return redirect('dashboard')->with('message', 'Post has been unpinned.');
    }

  

}