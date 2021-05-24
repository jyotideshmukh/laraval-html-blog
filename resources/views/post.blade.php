@extends('component.layout')
@section('content')
        <article>
            <h3><a href="post/{{ $post->getSlug() }}" >{{$post->getTitle()}} </a></h3>
            {!! $post->getBody() !!}
        </article>
@endsection
