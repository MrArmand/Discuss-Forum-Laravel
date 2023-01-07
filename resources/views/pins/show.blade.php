@if ($post->pins != null)
    @foreach ($post->pins as $pin)
        @if (auth()->user()->id == $pin->user_id)
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card">
                            <div class="p-3 mb-2 bg-warning text-dark"><a
                                    href="/user/{{ $post->user_id }}">{{ $post->username($post->user_id) }}</a>
                            </div>
                            <form action="{{ route('pins.destroy') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="pin_id" value="{{ $pin->id }}" />

                                <button type="submit" class="top-right btn btn-link">Unpin</button>
                            </form>
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
        @endif
    @endforeach
@endif
