<x-layout>

    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="{{ asset('/') }}images/illustration-1.png" alt="" class="rounded-xl">

                <p class="mt-4 block text-gray-400 text-xs">
                    Published
                    <time>{{ \Carbon\Carbon::make($post->published_at)->diffForHumans() }}</time>
                </p>

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <img src="{{ asset('/') }}images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">
                            <a href="{{ route('users.show',$post->user->username) }}">{{ $post->user->name }}</a>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/posts"
                        class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>
                        Back to Posts
                    </a>
                    <x-category-button :category="$post->category" />
                </div>
                <h1 class="font-bold text-3xl lg:text-4xl mb-10">{{ $post->title }}</h1>
                <div class="space-y-4 lg:text-lg leading-loose">
                    <p>{{ $post->body }}</p>
                </div>
            </div>
            <section class="col-span-8 col-start-5">
                @auth
                <form method="POST" action="{{ route('comments.store', $post)}}" class="p-6 rounded-xl border mt-6">
                    @csrf
                    <textarea name="body" class="w-full focus:outline-none focus:ring p-3 mb-4" rows="5"></textarea>
                    @error('body')
                    <p class="text-red-600 p-2 rounded-xl text-xs">{{ $message }}</p>
                    @enderror
                    <input class="bg-blue-500 text-white px-10 py-2 rounded-lg text-sm cursor-pointer" type="submit"
                        value="Comment">
                </form>
                @else
                <a href="/login" class="text-blue-500 hover:underline">Login</a> ro get particpate on comments
                @endauth
                @foreach ($post->comments as $comment)
                <x-post-comment :comment="$comment" />
                @endforeach
            </section>
        </article>
    </main>
</x-layout>