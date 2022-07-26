<x-layout>

    @include("_posts-header")

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($category->posts->count())
            <x-post-featured-card :post="$category->posts[0]"/>

            <div class="lg:grid lg:grid-cols-6">
                @foreach($category->posts->skip(1) as $post)
                    <x-post-card
                        :post="$post"
                        class="{{ $loop->iteration <3 ? 'col-span-3' : ' col-span-2' }}"/>
                @endforeach
            </div>
        @else
            <h1 class="text-3xl font-extrabold text-center">Sorry no posts founded.</h1>
        @endif
    </main>

</x-layout>


{{--<x-layout>--}}
{{--    <div class="container mx-auto">--}}
{{--        <article class="pt-6">--}}
{{--            <h2 class="text-3xl font-extrabold">{{ $category->name }}</h2>--}}
{{--            @foreach($posts as $post)--}}
{{--                <div class="mt-6">--}}
{{--                    <h2 class="text-3xl font-extrablod">{!! $post->title !!}</h2>--}}
{{--                    <span class="my-4 block">--}}
{{--                        Created by: <a href="{{ route("users.show", $post->user->username) }}"--}}
{{--                                       class="text-blue-700">{{ $post->user->name }}</a>--}}
{{--                    </span>--}}
{{--                    <small>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>--}}
{{--                    <p>{{ $post->body }}</p>--}}
{{--                </div>--}}
{{--                <hr class="mt-4">--}}
{{--            @endforeach--}}
{{--        </article>--}}
{{--    </div>--}}
{{--</x-layout>--}}
