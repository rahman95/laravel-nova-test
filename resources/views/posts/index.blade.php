@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <h3 class="col-md-8">Posts</h3>
        </div>
        @include('posts.partials.list')
    </div>
@endsection
