@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category By : {{ $category }}</h1>
    @foreach ($posts as $post)
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>
    @endforeach
    <a href="/categories" class="d-block mt-3">Back to Categories</a>
@endsection
