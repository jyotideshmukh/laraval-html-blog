@extends('component.layout')
@section('content')
        @foreach($posts as $post)
        <article class="{{ $loop->odd? 'odd':'even' }}">
            <h3><a href="/{{ $type=='Post'?'post':'blog' }}/{{ $post->getSlug()}}" >{{$post->getTitle()}}</a></h3>
            <p>By <a href="/user/{{ $post->user->email }}">{{$post->user->name}}</a> in
                <a href="/category/{{ $post->category->slug }}">{{$post->category->name}}</a>
            </p>
            {!! $post->getBody() !!}
        </article>
        @endforeach;
@endsection



