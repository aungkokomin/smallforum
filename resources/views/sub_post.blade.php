<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
    @foreach($posts as $post)
        <article>
            <a href="/posts/{!! $post->slug !!}"><h1>{!! $post->title !!}</h1></a>
            Written by <a href="/author/{!! $post->author->username !!}">{{ $post->author->name }}</a> in <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
            <p>{!! $post->excerpt !!}</p>

        </article>
    @endforeach
    <a href="/posts">Back to all Posts</a>
</body>