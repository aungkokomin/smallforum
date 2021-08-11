<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
        <x-post-feature :post="$posts[0]" />
            <div class="lg:grid lg:grid-cols-2">
                @foreach ($posts->skip(1) as $post)
                    <x-post-card :post="$post" />    
                @endforeach
            </div>
        @endif
    </main>
    {{-- @foreach($posts as $post)
        <article>
            <a href="/posts/{!! $post->slug !!}"><h1>{!! $post->title !!}</h1></a>
            Written by <a href="/author/{!! $post->author->username !!}">{{ $post->author->name }}</a> in <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
            <p>{!! $post->excerpt !!}</p>

        </article>
    @endforeach --}}
</x-layout>

