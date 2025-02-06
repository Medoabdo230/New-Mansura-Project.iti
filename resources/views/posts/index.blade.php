@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center my-4">All Posts</h2>
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">+ New Post</a>
        <a href="{{ route('show.login') }}" class="btn btn-secondary">Login</a>
      <a href="{{ route('show.register') }}" class="btn btn-danger">Register</a>
    </div>

    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($post->content, 80) }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
