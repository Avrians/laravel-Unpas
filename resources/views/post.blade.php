@extends('layouts.main')

@section('container')
    <article>
        <h2> {{ $post->title }}</h2>

        {{-- kurung ini berfungsi untuk menjalankan semua perintah html walaupun ada di text jika memakai kurung biasa tidak bisa --}}
        {!! $post->body !!}
 
    <a href="/posts">Back to Post</a>
@endsection
