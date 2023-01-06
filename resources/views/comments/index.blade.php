@if ($comment->user_id == auth()->user()->id)
     <form action="{{ route('comments.destroy') }}" method="POST">
         @csrf

         @method('DELETE')
         <input type="hidden" name="comment_id" value="{{ $comment->id }}" />

         <button type="submit" class="btn">Delete comment</button>
     </form>
 @endif
