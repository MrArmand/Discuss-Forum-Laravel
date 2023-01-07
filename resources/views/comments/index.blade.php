@if ($comment->user_id == auth()->user()->id || auth()->user()->role == 1)
     <form action="{{ route('comments.destroy') }}" method="POST">
         @csrf

         @method('DELETE')
         <input type="hidden" name="comment_id" value="{{ $comment->id }}" />

         <button type="submit" class="btn btn-secondary top-right-comment">Delete comment</button>
     </form>
 @endif
