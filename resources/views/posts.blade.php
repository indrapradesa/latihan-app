@extends('layouts/main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">Halaman Post</h1>
            <article>
                <p>By <a href="/post?author={{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a> in <a href="/post?category={{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a></p>
                @if ($posts->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/'.$posts->image) }}" alt="{{ $posts->category->name }}" class="img-fluid mt-3">
                    </div>
                @else    
                        <img src="https://source.unsplash.com/720x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
               {!! $posts->body !!} 
               {{-- tidak melakukan escapeing --}}
                </article>
            </article>
        
            <a href="/post" class="d-block mt-3"> Back to Post</a>
        </div>
    </div>
</div>
@endsection