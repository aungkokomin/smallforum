<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
    <article>
        <h1>{{ $post->title }}</h1>
        By <a href="/author/{{$post->author->username}}">{{$post->author->name}}</a> In <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
        <p>{{ $post->body }}</p>
    </article>
    <a href="/posts">Go Back</a>
</body>
