@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <h3 class="col-md-8">{{ $post->title }}</h3>
        </div>
        @include('posts.partials.view')
    </div>
@endsection
