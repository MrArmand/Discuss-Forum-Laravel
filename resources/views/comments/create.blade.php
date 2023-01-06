<form method="POST" action="{{ route('comments.store') }}">

    @csrf
    <div class="form-group">
        <label>Comment</label>
        <input type="text" name="content" class="form-control" required="" />
        <input type="hidden" name="post_id" value="{{ $post->id }}" />
    </div>
    <div class="right">
        <button type="submit" class="btn">Submit</button>
    </div>
</form>