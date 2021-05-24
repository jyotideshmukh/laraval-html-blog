<html>
    <head>
        <title> Learning laravel</title>
        <link rel="stylesheet" type="text/css" href="/app.css">

    </head>
    <body>
    <div class="container">
        <article>
            <h3><a href="post/{{ $post->getSlug() }}" >{{$post->getTitle()}} </a></h3>
            {{ $post->getBody()}}
        </article>
    </div>

    </body>
</html>
