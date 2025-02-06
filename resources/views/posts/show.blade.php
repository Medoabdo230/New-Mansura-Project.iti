@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-lg mt-4">
        <div class="card-body">
            <h2 class="text-center">{{ $post->title }}</h2>
            <p class="text-muted text-center">Posted on {{ $post->created_at->format('M d, Y') }}</p>
            <hr>
            <p class="lead">{{ $post->content }}</p>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection
