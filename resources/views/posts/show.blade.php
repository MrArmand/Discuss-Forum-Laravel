<div class="container">
    <div class="col">
        <div class="card">
            <div class="card-header bg-primary profile"><a href="/user/{{ $post->user_id }}"><i class="fas fa-user-alt"></i> {{ $post->username($post->user_id) }}</a>
            </div>
            <div class="top-right-pin pin"><a href="/post/pinned/{{ $post->id }}"> <i class="fas fa-star"></i>Pin to the top
                </a>
            </div>
            <div class="card-body">

                {{ __($post->content) }}

                @include('comments.show', ['post' => $post])

            </div>
            @include('posts.index', ['post' => $post])
        </div>

        <nav class="breadcrumb">
            <div class="container">
                @include('comments.create', ['post' => $post])
            </div>
    </div>

</div>
