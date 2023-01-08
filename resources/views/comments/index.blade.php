@if ($comment->user_id == auth()->user()->id || auth()->user()->role == 1)
    <div class="container">
        <form action="{{ route('comments.destroy') }}" method="POST">
            @csrf

            @method('DELETE')
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />

            <button type="submit" class="btn btn-secondary top-right-comment">Delete</button>
        </form>

        @if ($comment->user_id == auth()->user()->id)
            <form action="/comment/edit/{{ $comment->id }}" method="get">
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                <button type="submit" class="btn btn-dark top-right-edit">Edit</button>
            </form>
        @endif
    </div>
@endif
