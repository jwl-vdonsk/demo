<x-layout>
    <article>
        <h1>
            {!! $post->title !!}
        </h1>

        <p>
            by <a href="#">{{ $post->user->name }}</a> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->body !!}
        </div>
    </article>
    <p>
        <a href="/">Go back</a>
    </p>
</x-layout>
