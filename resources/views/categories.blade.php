@extends('layouts/main')

@section('container')

    <h1 class="md-5">Post Categories</h1>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/post?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/720x400?{{ $category->name }}" alt="{{ $category->name }}" class="img-fluid">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4f fs-3" style="background-color: rgb(0, 0, 0, 0.7)"> {{ $category->name }}</h5>
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div> 
</div>
@endsection