@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left" class="arrow-left"></span> Back to all my posts</a>
            <a href="" class="btn btn-warning"> <span data-feather="edit" class="arrow-left"></span> Edit</a>
            <a href="" class="btn btn-danger"> <span data-feather="x-circle" class="arrow-left"></span> Delete</a>

            <h1 class="my-3"> {{ $post->title }}</h1>

            <p>By. <a href="/posts?author={{ $post->author->username }}"  class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p> 

            <img src="https:source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
    
            {{-- kurung ini berfungsi untuk menjalankan semua perintah html walaupun ada di text jika memakai kurung biasa tidak bisa --}}
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
     
            <a href="/posts" class="d-block mt-3">Back to Post</a>
        </div>
    </div>
</div>

@endsection