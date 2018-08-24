<div class="container">
    @forelse($posts as $post)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
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
                </div>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">View</a>
            </div>
        </div>
    @empty
        <span> No Posts available</span>
    @endforelse
    {{ $posts->links() }}
</div>
