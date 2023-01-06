@if ($post->user_id == auth()->user()->id)
    <form action="{{ route('posts.destroy') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="post_id" value="{{ $post->id }}" />

        <button type="submit" class="btn btn-danger btn-block">Delete post</button>
    </form>


    <form action="/post/edit/{{ $post->id }}" method="get">
        <input type="hidden" name="post_id" value="{{ $post->id }}" />      
        <button type="submit" class="btn btn-danger btn-block">Edit post</button>
    </form>
@endif
