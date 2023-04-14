@extends('layouts.main')

@section('container')
    <article>
        <h2> {{ $post->title }}</h2>

        <p>By. <a href="#"  class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

        {{-- kurung ini berfungsi untuk menjalankan semua perintah html walaupun ada di text jika memakai kurung biasa tidak bisa --}}
        {!! $post->body !!}
 
    <a href="/posts" class="d-block mt-3">Back to Post</a>
@endsection
