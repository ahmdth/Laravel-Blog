<x-layout>

    @include("_posts-header")

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($categories->count())
            @foreach($categories as $category)
                <h2 class="text-2xl font-blod text-blue-700">
                    <a href="{{ route("categories.show", $category->slug) }}">{{ $category->name }}</a>
                </h2>
            @endforeach
        @else
            <h1 class="text-3xl font-extrabold text-center">Sorry no Categories found.</h1>
        @endif
    </main>

</x-layout>
