<html>
    <head>
        <title> Learning laravel</title>
        <link rel="stylesheet" type="text/css" href="/app.css">

    </head>
    <body>
    <div class="container">
        @foreach($posts as $post)
        <article class="{{ $loop->odd? 'odd':'even' }}">
            <h3><a href="post/{{ $post->getSlug()}}" >{{$post->getTitle()}}</a></h3>
            {!! $post->getBody() !!}
        </article>
        @endforeach;



    </div>

    </body>
</html>
