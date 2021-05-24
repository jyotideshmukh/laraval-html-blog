@extends('component.layout')
@section('content')
        @foreach($posts as $post)
        <article class="{{ $loop->odd? 'odd':'even' }}">
            <h3><a href="{{ $type=='Post'?'post':'blog' }}/{{ $post->getSlug()}}" >{{$post->getTitle()}}</a></h3>
            {!! $post->getBody() !!}
        </article>
        @endforeach;
@endsection



