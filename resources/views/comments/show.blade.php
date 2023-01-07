@if ($post->comments)
<blockquote></blockquote>
<header>
   <i>{{ 'Comment section:' }}</i>
</header>
    @foreach ($post->comments as $comment)
        <div class="col">
            <blockquote></blockquote>
            <div class="container">
                <div class="card">
                    <div class="card-header"><a
                            href="/user/{{ $comment->user_id }}"><i class="fas fa-user-circle"></i>{{$post->username($comment->user_id) }}</a>
                        @include('comments.index', ['comment' => $comment])
                    </div>
                    <div class="container">
                        {{ $comment->content }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
