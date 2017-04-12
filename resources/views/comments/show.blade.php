@if(!empty($article))
    <ol>
        @foreach($comments as $comment)
            <article id="div-comment-302" class="comment-body card-box">
                <footer class="comment-meta">
                    <div class="comment-author">
                        <img src="" alt="">
                        <b>{{$comment->user}}</b> says:

                        <div class="comment-metadata">
                            <a href="">
                                <time datetime="{{$comment->created_at}}">
                                    {{$comment->created_at->diffForHumans()}}
                                </time>
                            </a>
                            <span class="edit-link">
                                    <a class="comment-edit-link" href="">Edit</a>
                                </span>
                        </div><!-- .comment-metadata -->
                    </div>

                </footer><!-- .comment-meta -->

                <div class="comment-body">
                    <p>{{$comment->body}}</p>
                </div><!-- .comment-content -->

                <div class="reply">
                    <a rel="nofollow" class="comment-reply-link" href="" aria-label="Reply to {{$comment->user}}">Reply</a>
                </div>
            </article>

        @endforeach
    </ol>
@endif

@if(1==0)
<div class="comments">
    <div>
        <p>
            <span class="comment-user">{{$comment->user}}</span>
            {{$comment->created_at->diffForHumans()}}
        </p>
    </div>

    <div class="comment-list">
        <li>{{$comment->body}}</li>
    </div>
</div>
    @endif
