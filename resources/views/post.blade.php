@extends('layouts.main')
@section('container')

    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <p>By <a href="#">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/posts" class="d-block mt-5">Back to Posts</a>


@endsection
