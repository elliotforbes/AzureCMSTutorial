@extends('app')

@section('content') 

    @foreach($articles as $article)
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $article->title }}</h2>
        <p class="blog-post-meta">Author: {{ $article->author }}</p>
        {{ $article->body }}
    </div>
    @endforeach


    <div class="pagination">
        {!! $articles->render() !!}
    </div>

@endsection