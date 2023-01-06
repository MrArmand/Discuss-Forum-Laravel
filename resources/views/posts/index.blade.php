 @if ($post->user_id == auth()->user()->id)
     <form method="post" action="{{ route('posts.destroy') }}">
         <input type="hidden" name="post_id" value="{{ $post->id }}" />
         <a href="{{ route('posts.destroy') }}">Delete post</a>
 @endif
