@extends('component.layout')
@section('content')
        <article>
            <h3><a href="post/{{ $post->getSlug() }}" >{{$post->getTitle()}} </a></h3>
            <p>By <a href="/user/{{ $post->user->email }}">{{$post->user->name}}</a> in
                <a href="/category/{{ $post->category->slug }}">{{$post->category->name}}</a>
            </p>
            {!! $post->getBody() !!}
        </article>
@endsection
