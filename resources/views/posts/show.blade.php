<div class="container px-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $post->username($post->user_id) }}</a></div>
                <div class="card-body">

                    {{ __($post->content) }}

                    @include('comments.show', ['post' => $post])

                </div>
            </div>
        </div>
    </div>
</div>