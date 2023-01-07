<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header"><a
                        href="/user/{{ $post->user_id }}">{{ $post->username($post->user_id) }}</a>
                </div>
                <div class="top-right links"><a href="/post/pinned/{{ $post->user_id }}"> Pin to the top </a>
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
</div>