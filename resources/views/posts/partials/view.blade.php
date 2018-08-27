<article class="container py-3">
    <h1>{{ $post->title }}</h1>
    <h3>{{ $post->subtitle }}</h3>
    <div class="container row article">
        <div class="col-sm-1 pic">
            <img src="https://secure.gravatar.com/avatar/{{ md5($post->user->email) }}?size=512" class="img-fluid rounded mx-auto d-block"/>
        </div>
        <div class="col-sm-11 meta">
            <span class="d-block">
                <strong>
                    {{$post->user->name}}
                </strong>
            </span>
            <span class="d-block time">
                {{$post->published_on}}
            </span>
        </div>
        <span class="py-2">
            @markdown($post->body)
        </span>
    </div>
</article>
