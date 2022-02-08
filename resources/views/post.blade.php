@extends('layouts/main')

@section('container')

<h1 class="mb-5 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/post">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="category" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search...." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
        @if ($posts[0]->image)
            <div style="max-height: 400px; overflow: hidden;">
                <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}" class="img-fluid">
            </div>
        @else    
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card-body text-center">
        <h5 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p>
            <small class="text-muted">  
                By <a href="/post?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                {{ $posts[0]->author->name }}</a> In <a href="/post?category={{ $posts[0]->category->slug }}" 
                    class="text-decoration-none">{{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more</a>
        </div>
    </div>

<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute text-white px-3 py-1" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/post?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                @if ($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                @else    
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                <div class="card-body">
                  <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                  <p>
                    <small class="text-muted">  
                        By <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@else

    <p class="text-center fs-4">No Post Found.</p>

@endif

<div class="d-flex justify-content-center">
{{ $posts->links() }}
</div>

@endsection