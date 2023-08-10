@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                     alt=""
                     width="40"
                     height="60"
                     class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
            <textarea
                name="body"
                class="w-full text-sm focus:outline-none focus:ring"
                rows="3"
                placeholder="Thing of something to say"
                required></textarea>

                @error('body')
                <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-5">
                <x-form.button>Post</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline text-blue-500 font-bold">Register</a>
        or
        <a href="/login" class="hover:underline text-blue-500 font-bold">log in</a> to leave a comment.
    </p>

@endauth
