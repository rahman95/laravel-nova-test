<div class="card">
    <div class="card-body">
        <div class="meta py-2 d-block">
            <span>
                <i class="fas fa-info-circle"></i>
                {{ $post->subtitle }}
            </span>
            <span>
                <i class="fas fa-user"></i>
                {{$post->user->name}}
            </span>
            <span>
                <i class="far fa-clock"></i>
                {{$post->published_on}}
            </span>
            <div class="card-text py-3">
                @markdown($post->body)
            </div>
        </div>
    </div>
</div>
