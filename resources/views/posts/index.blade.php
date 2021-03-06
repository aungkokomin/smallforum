<x-layout>
    @include('posts._header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
        <x-post-feature :post="$posts[0]" />

        <x-post-grid :posts="$posts" />

        {{ $posts->links() }}
        @else
            <p class="text-center">No Posts Available. Please check back later.</p>
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

