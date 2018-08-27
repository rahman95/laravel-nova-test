<div class="container">
    @forelse($posts as $post)
        <div class="card my-2">
            <div class="card-body post">
                <h5 class="card-title">{{ $post->title }}</h5>
                <h6 class="card-title">{{ $post->subtitle }}</h6>
                <div class="meta py-2 d-block">
                    <span>
                        <i class="fas fa-user"></i>
                        {{$post->user->name}}
                    </span>
                    <span>
                        <i class="far fa-clock"></i>
                        {{$post->published_on}}
                    </span>
                </div>
                <div class="action">
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary">View</a>
                </div>
            </div>
        </div>
    @empty
        <span> No Posts available</span>
    @endforelse
    {{ $posts->links() }}
</div>
