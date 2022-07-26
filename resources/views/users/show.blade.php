<x-layout>
    <div class="container mx-auto">
        <article class="pt-6">
            <h2 class="text-3xl font-blod">{{ $user->name }}</h2>
            @foreach($posts as $post)
                <div class="mt-6">
                    <h2 class="text-3xl font-blod text-blue-600">
                        <a href="{{ route('posts.show', $post->slug) }}">{!! $post->title !!}</a>
                    </h2>
                    <small>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</small>
                    <p>{{ $post->body }}</p>
                </div>
                <hr class="mt-4">
            @endforeach
        </article>
    </div>
</x-layout>
