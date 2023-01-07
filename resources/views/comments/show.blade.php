@if ($post->comments != null)
                                @foreach ($post->comments as $comment)
                                    <nav class="">
                                        <div class="container">
                                            <div class="card">
                                                    <div class="card-header"><a
                                                            href="/user/{{ $comment->user_id }}">{{ $post->username($comment->user_id) }}</a>
                                                            @include('comments.index', ['comment' => $comment])  
                                                    </div>
                                                    {{ $comment->content }}
                                                                                            
                                            </div>
                                        </div>
                                @endforeach
                            @endif